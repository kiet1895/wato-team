@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-login">
			<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="email">
						<label for="email">{{ __('E-Mail Address') }}</label>
						<input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autofocus>
					</div>
					<div class="pass">
						<label for="password">{{ __('Password') }}</label>
						<input id="password" type="password" class="" name="password" required>
					</div>
					<div class="btn">
							<button type="submit">
									{{ __('Login') }}
							</button>
							@if (Route::has('password.request'))
									<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
									</a>
							@endif
					</div>
			</form>
    </div>
</div>
@endsection
