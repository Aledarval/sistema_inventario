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
				
                <li class="nav-item">
                    <a href="{{route('transaccion.index')}}" class="nav-link">
                        <i class="fas fa-exchange-alt"></i> 
                        <p>  Transacciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('configuracion.index')}}" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <p>  Configuraciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('estadistica.index')}}" class="nav-link">
                        <i class="fas fa-file-pdf"></i>
                        <p>  Reportes</p>
                    </a>
                </li>
				<li class="nav-header"> <i class="fas fa-lock"> Seguridad </i></li>
                <li class="nav-item"> 
					<a href="{{route('user.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
			</ul>
		</nav>
	</div>

</aside>
