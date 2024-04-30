{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>SIPERAN</title>

				<!-- Google Font: Source Sans Pro -->
				<link rel="stylesheet"
								href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
				<!-- Font Awesome -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
				<!-- icheck bootstrap -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
				<!-- Theme style -->
				<link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
				@if (session('success'))
								<div class="alert alert-success">
												{{ session('success') }}
								</div>
				@endif

				<div class="register-box">
								<div class="card card-outline card-primary">
												<div class="card-header text-center">
																<a href="#" class="h1"><b>SIPERAN</b></a>
												</div>
												<div class="card-body">
																<p class="login-box-msg">Login</p>

																<form action="{{ route('login') }}" method="post">
																				@csrf
																				<div class="input-group mb-3">
																								<input name="username" type="text" class="form-control" placeholder="Username">
																								<div class="input-group-append">
																												<div class="input-group-text">
																																<span class="fas fa-user"></span>
																												</div>
																								</div>
																								{{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

																				</div>
																				<div class="input-group mb-3">
																								<input name="password" type="password" class="form-control" placeholder="Password">
																								<div class="input-group-append">
																												<div class="input-group-text">
																																<span class="fas fa-lock"></span>
																												</div>
																								</div>
																								<x-input-error :messages="$errors->get('password')" class="mt-2" />
																				</div>

																				<div class="row">
																								<div class="col-12">
																												<button type="submit" class="btn btn-primary btn-block"><strong>Login</strong></button>
																								</div>
																								<!-- /.col -->
																				</div>
																</form>
																<br>
																{{-- <a href="{{ route('register') }}" class="text-center">
        Klik untuk mendaftar calon karyawan!</a> --}}

																{{-- <a href="{{ url('/regist-calonkaryawan') }}" class="text-center">Klik untuk mendaftar calon
																				karyawan!</a> --}}
												</div>
												<!-- /.form-box -->
								</div><!-- /.card -->
				</div>
				<!-- /.register-box -->

				<!-- jQuery -->
				<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
				<!-- Bootstrap 4 -->
				<script src="{{ 'vendors/plugins/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
				<!-- AdminLTE App -->
				<script src="{{ 'vendors/dist/js/adminlte.min.js' }}"></script>
</body>

</html>
