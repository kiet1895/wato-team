<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Ve may bay</title>
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
			crossorigin="anonymous">
</head>
<body>
	<div id="app">
			<header>
				<div class="top-header">
						<div class="container">
							<div class="header-left">
									<i class="far fa-star"></i>
									<span>Đặt Vé Máy Bay Giá Rẻ Trực Tuyến</span>
							</div>
							<div class="header-right">
									<ul>
										<li><a href="#">Liên Hệ</a></li>
										<li><a href="#">Đăng Nhập</a></li>
										<li><a href="#">Đăng Kí</a></li>
									</ul>
							</div>
						</div>
				</div>
				<div class="navbar">
						<div class="container">
							<a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt="ve may bay"></a>
							<div class="navbar-menu">
									<ul>
										<li class="is-active"><a href="#">Vé Máy Bay</a></li>
										<li><a href="#">Cẩm Nang Du Lịch</a></li>
										<li><a href="#">Khách Sạn</a></li>
									</ul>
							</div>
							<div class="navbar-right">
									<span class="hotline">
									<i>Hotline: </i>
									<b>0932 126 988</b>
									</span>
							</div>
						</div>
				</div>
			</header>
			
			{{-- <header>
				<div class="container">
						<div>
							<a class="logo" href="{{ url('/') }}">FlY</a>
						</div>
						<div class="menu">
							<!-- Right Side Of Navbar -->
							<ul class="menu-list">
									<!-- Authentication Links -->
									@guest
									<li class="nav-items">
										<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
									</li>
									@if (Route::has('register'))
									<li class="nav-items">
										<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
									@endif
									@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="dropdown-toggle" href="#" role="button">
										{{ Auth::user()->name }}
										</a>
										<ul class="dropdown-menu">
												<li class="dropdown-item">
													<a href="{{ route('logout') }}" onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
													Logout
													</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
													</form>
												</li>
										</ul>
									</li>
									@endguest
							</ul>
						</div>
				</div>
			</header> --}}
			
			<main>
				<div class="homeSearch">
					<div class="container">
						<div class="wrap-box-search">
							<div class="tab-services">
								<ul>
									<li class="tab-flight">Vé Máy Bay</li>
									<li class="tab-promotion">
										<i class="fas fa-check"></i>
										<a href="#">Khuyến Mãi</a>
									</li>
									<li class="travel">
										<i class="fas fa-check"></i>
										<a href="#">Cẩm Nang Du Lịch</a>
									</li>
								</ul>
							</div>
							<div class="ticketype">
								<label class="custom" for="radioOneWay"><span ></span>Một Chiều</label>
								<label class="custom2 radio" for="custom2"><span ></span>Khứ hồi</label>
							</div>
							<div class="box-search">
								<div class="box-search-first">
									<button type="submit"></button>
									<div class="box-location">
											<div class="start">
												<label>
													<i class="fas fa-map-marker-alt"></i>
													<span>Điểm đi</span>
												</label>
												<input placeholder="Hà Nội" list="id"></input>
												<datalist id="id">
														<option value="Hà Nội">Ha Noi</option>
														<option value="TP Hồ Chí Minh">Tp HCM</option>
												</datalist>
											</div>
											<div class="final">
												<label>
													<i class="fas fa-map-marker-alt"></i>
													<span>Điểm đến</span>
												</label>
												<input placeholder="TP Hồ Chí Minh" list="id"></input>
												<datalist id="id">
														<option value="Hà Nội">Ha Noi</option>
														<option value="TP Hồ Chí Minh">Tp HCM</option>
												</datalist>
											</div>
									</div>
								</div>
								<div class="box-days">
									<div class="start-days">
										<label>
											<i class="fas fa-calendar-alt"></i>
											<span>Ngày đi</span>
										</label>
										<input type="date" name="" min="2019-01-01"/>
									</div>
									<div class="final-days">
										<label>
											<i class="fas fa-calendar-alt"></i>
											<span>Ngày Về</span>
										</label>
										<input class="textbox-n" type="date" placeholder="Ngày về" min="2019-01-01" id="date">
									</div>
								</div>
								<div class="box-people">
									<div class="Adults">
											<label>
												<i class="fas fa-walking"></i>
												<span>Người lớn(> 12 tuổi)</span>
											</label>
											<input placeholder="0" list="id-pepple"></input>
											<datalist id="id-pepple">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
											</datalist>
									</div>
									<div class="child">
											<label>
												<i class="fas fa-walking"></i>
												<span>Trẻ em(2- 12 tuổi)</span>
											</label>
											<input placeholder="0" list="id-pepple"></input>
									</div>
									<div class="born">
											<label>
												<i class="fas fa-walking"></i>
												<span>Trẻ em( < 2 tuổi)</span>
											</label>
											<input placeholder="0" list="id-pepple"></input>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="aaa">

				</div>
				@yield('content')
			</main>
	</div>
</body>
</html>