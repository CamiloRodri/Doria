<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Produccion;
use App\Costo;
use App\User;
use App\Agente;
use App\Producto;

class ProduccionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$todayDate = Carbon::now();
        $todayDate = $todayDate->format('Y-m-d');
        $produccion = Produccion::whereDate('fecha', '>=', Carbon::now()->format('Y-m-d'));
        //$cantidad = $produccion->count();
        $costos = Costo::where('fecha', $todayDate);
        $agente = Agente::where('nombre_agente', '=', 'Proveedor')->value('id');       
        $proveedores = User::where('agente_id', $agente)->get();
        $cantidad = 1;
    	return view('Produccion.listado_produccion', compact('produccion', 'cantidad', 'costos', 'proveedores'));     
    }

    public function create()
    {
    	$todayDate = Carbon::now();
        $todayDate = $todayDate->format('Y-m-d');
        $costos = Costo::where('fecha', $todayDate);
        return view('Produccion.agregar_produccion', compact('todayDate', 'costos'));
    }

    public function store()
    {
        $data = request()->validate([
                'number' => 'required',
                'fecha' => ''
        ], [
            'number.required' => 'El campo es requerido',
            'fecha.required' => 'El campo es requerido'

        ]);

        //$fecha = Carbon::createFromFormat('Y-m-d', $data['fecha']);
        //dd($fecha);
        $producto = Producto::where('nombre_producto', 'Spaguetti')->value('id');
        $produccion = Produccion::create([
            'cantidad' => $data['number'],
            'fecha' => $data['fecha'], 
            'precio_produccion' => 1,
            'producto_id' => $producto
        ]);
        
        //$user->attachRole($rol);

        return redirect()->route('proveedor.list');
    }
}
