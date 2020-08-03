<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="{{route('home.index')}}" class="brand-link">

		<span class="brand-text font-weight-light">SISTEMA DE INVENTARIO</span>
	</a>
	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
			<img src="../../dist/img/user7.jpg" class="img-circle elevation-2" alt="User Image">

		</div>
		<div class="info">
			<a href="#" class="d-block">Amoreno</a>
		</div>
	</div>

	<div class="sidebar">

		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-exchange-alt"></i>  Transacciones
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('user.index')}}">Entradas</a>
                        <a class="dropdown-item" href="{{route('user.index')}}">Salidas</a>
                        <a class="dropdown-item" href="{{route('user.index')}}">Movimientos</a>
                        <a class="dropdown-item" href="{{route('user.index')}}">Inventarios</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cog"></i>  Configuraciones
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('almacen.index')}}">Almacén</a>
                        <a class="dropdown-item" href="{{route('user.index')}}">Salidas</a>
                        <a class="dropdown-item" href="{{route('user.index')}}">Movimientos</a>
                        <a class="dropdown-item" href="{{route('user.index')}}">Inventarios</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-file-pdf"></i>  Reportes
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('user.index')}}">Entradas</a>                   
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-lock"></i>   Seguridad
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('user.index')}}">Usuario</a>
                </li>
               
			</ul>
		</nav>
	</div>

</aside>
