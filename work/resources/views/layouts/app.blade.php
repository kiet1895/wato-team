<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Home Work</title>
		
		
		
		

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app">
		<header>
			<div class="container">
				<div class="logo">
					<label for="#">
						<i class="fas fa-globe-europe"></i>
						<a href="{{ url('/categories') }}">Home Work</a>
					</label>
				</div>
				<ul class="user-login">
						<!-- Authentication Links -->
					@guest
							<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
									<li class="nav-item">
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
							@endif
					@else
						<li class="nav-item dropdown">
								<a>
									{{ Auth::user()->name }} <span></span>
								</a>

								<div>
									<a href="{{ route('logout') }}"
											onclick="event.preventDefault();
																			document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
									</form>
								</div>
						</li>
					@endguest
				</ul>
			</div>
		</header>
		<main>
			@yield('content')
		</main>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
			});
			</script>
    <!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
