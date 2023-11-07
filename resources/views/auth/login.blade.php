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
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auth/auth_style.css">
    <title>تسجيل الدخول</title>
</head>
<body>

    <div class="section_login_main">
		<input  type="checkbox" id="section_login_chk" aria-hidden="true">

			<div class="section_login_login">
				<form class="section_login_form"method="POST" action="{{ route('login') }}">
                    @csrf
					<label class="section_login_label" for="section_login_chk" aria-hidden="true">Log in</label>
					<input class=" section_login_input" type="email"id="name" name="email" placeholder="Email" required="">
					<input class="section_login_input" type="password"id="password" name="password" placeholder="Password" required="">
                    <x-primary-button class="ml-3 btn_log section_login_btn">
                        {{ __(' Log in') }}
                    </x-primary-button>
				</form>
			</div>

      <div class="section_login_register">
                    <form class="section_login_form"  method="POST" action="{{ route('register') }}">
                        @csrf
					<label class="section_login_label" for="section_login_chk" aria-hidden="true">Register</label>
					<input class="section_login_input " type="text"id="name" name="name" placeholder="User Name" required="">
					<input class="section_login_input" type="email"id="email" name="email" placeholder="Email" required="">
					{{-- <input class="section_login_input" type="email" name="email" placeholder="Phone" required=""> --}}
					<input class="section_login_input" type="password" id="password" name="password" placeholder="password" required="">
					<input class="section_login_input" type="password"id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required="">
                    <x-primary-button class="ml-4 btn_log section_login_btn">
                        {{ __(' Register') }}
                    </x-primary-button>
				</form>
			</div>
	</div>


</body>
</html>
