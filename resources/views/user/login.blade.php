<!DOCTYPE html>
<html lang="es">
<head>
	<title>SISTINVE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}"/>
<!--===============================================================================================-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/util.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/main1.css') }}" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form autocomplete="off" class="login100-form validate-form" method="post" action="{{route('user.login')}}">
                    {{ csrf_field() }}
					<span class="login100-form-title">
						SISTINVE
                    </span>
                    @if ($errors->has('login'))
                        <div class="alert alert-danger animated infinite bounce delay-2s">
                            <button type="button" class="close" data-close="alert"></button>
                            @foreach ($errors->all() as $error)
                                Usuario o Clave incorrectos<br>
                            @endforeach
                        </div>
                    @endif
					<div class="wrap-input100 validate-input" data-validate = "Ingrese usuario">
						<input class="input100" type="text" name="login" id="login" placeholder="Usuario">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese password">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Acceder
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main1.js') }}"></script>

</body>
</html>
