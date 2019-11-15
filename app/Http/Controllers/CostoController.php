<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costo;
use App\Produccion;
use App\CompraProveedor;
use Carbon\Carbon;

class CostoController extends Controller
{
    //
    public function store()
    {
        $data = request()->validate([
                'number' => 'required',
                'proveedor' => ''
        ], [
            'number.required' => 'El campo es requerido',
            'proveedor.required' => 'El campo es requerido'

        ]);

        $produccion = Produccion::whereDate('fecha', Carbon::now()->format('Y-m-d'))->value('id');
       	$precio = CompraProveedor::where('id', $data['proveedor'])->value('precio');
       	$precio = $precio*(int)$data['number'];
        
        Costo::create([
            'produccion_id' => $produccion,
            'precio' => $precio, 
            'cantidad' => $data['number'],
            'proveedor_id' => $data['proveedor']
        ]);

        $costos = Costo::where('produccion_id', $produccion)->get();
        $sumaprecio = 0;
        foreach ($costos as $costo) {
        	$sumaprecio = (int)$sumaprecio + (int)$costo->precio;
        }

        $produccion = Produccion::find($produccion);
        $produccion->precio_produccion = $sumaprecio;
        $produccion->update();
        

        return redirect()->route('produccion.list');
    }

    public function destroy(Costo $costo)
    {
        $costo->delete();
        

        $produccion = Produccion::whereDate('fecha', Carbon::now()->format('Y-m-d'))->value('id');
        $costos = Costo::where('produccion_id', $produccion)->get();
        $sumaprecio = 0;
        foreach ($costos as $costo) {
        	$sumaprecio = (int)$sumaprecio + (int)$costo->precio;
        }

        $produccion = Produccion::find($produccion);
        $produccion->precio_produccion = $sumaprecio;
        $produccion->update();

        return redirect()->route('produccion.list');
    }
}
