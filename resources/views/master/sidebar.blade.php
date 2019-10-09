    <!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            {{-- Inicio --}}
            <li class="nav-item start ">
                <a href="{{ asset('home') }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Inicio</span>
                    <span class="arrow"></span>
                </a>
            </li>
            {{-- Usuarios --}}
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Usuarios</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="javascript;" class="nav-link ">
                            <i class="fa fa-male"></i>
                            <span class="title">Tipos de Agente</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript;" class="nav-link ">
                            <i class="fa fa-arrows-alt"></i>
                            <span class="title">Pemisos</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript;" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">Jefes de Proceso</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Agentes --}}
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
                    <span class="title">Agentes</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="javascript;" class="nav-link ">
                            <i class="fa fa-truck"></i>
                            <span class="title">Proveedores</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript;" class="nav-link ">
                            <i class="fa fa-male"></i>
                            <span class="title">Detallistas</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="javascript;" class="nav-link ">
                            <i class="fa fa-bookmark"></i>
                            <span class="title">Distribuidores</span>
                        </a>
                    </li>

                    @if(Entrust::can('agregar-ejemplar'))
                    <li class="nav-item  ">
                        <a href="javascript;" class="nav-link ">
                            <i class="fa fa-bookmark"></i>
                            <span class="title">Agregar Ejemplar</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            {{-- Producción --}}
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Producción</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="charts_amcharts.html" class="nav-link ">
                            <i class="fa fa-money"></i>
                            <span class="title">Compra a Proveedores</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="charts_amcharts.html" class="nav-link ">
                            <i class="fa fa-upload"></i>
                            <span class="title">Producción por Dia</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            {{-- Spaguetti --}}
            <li class="nav-item  ">
                <a href="javascript;" class="nav-link nav-toggle">
                    <i class="fa fa-pagelines"></i>
                    <span class="title">Spaghetti</span>
                    <span class="arrow"></span>
                </a>
            </li>

            {{-- Carrito --}}
            <li class="nav-item  ">
                <a href="javascript;" class="nav-link nav-toggle">
                    <i class="icon-basket"></i>
                    <span class="title">Carrito</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="maps_google.html" class="nav-link ">
                            <i class="fa fa-map"></i>
                            <span class="title">Pedido</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="maps_google.html" class="nav-link ">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="title">Carrito de Compras</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ul"></i>
                    <span class="title">Inventario</span>
                    <span class="arrow"></span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="javascript;" class="nav-link nav-toggle">
                    <i class="fa fa-area-chart"></i>
                    <span class="title">Utilidad</span>
                    <span class="arrow"></span>
                </a>
            </li>
            
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Configuración</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="javascript;" class="nav-link ">
                            <i class="fa fa-cog"></i>
                            <span class="title">Perfil</span>
                        </a>
                    </li>                                
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->