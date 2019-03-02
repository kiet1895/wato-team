<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Working</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
		<div class="appHome">
			<header>
				<div class="container">
					<div class="logo">
						<label for="#">
							<i class="fas fa-globe-europe"></i>
							<a href="{{ url('/categories') }}">Home Work</a>
						</label>
					</div>
					<div class="action">
						@if (Route::has('login'))
							<div class="action-btn">
								@auth
									<a href="{{ url('/categories') }}">Home</a>
								@else
									<a href="{{ route('login') }}">Login</a>

									@if (Route::has('register'))
										<a href="{{ route('register') }}">Register</a>
									@endif
								@endauth
							</div>
						@endif
					</div>
				</div>
			</header>
		</div>
    </body>
</html>
