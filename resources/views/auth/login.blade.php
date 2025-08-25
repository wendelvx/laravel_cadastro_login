<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Faça seu login</h2>
        
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
            </div>
            
            @error('email')
                <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <input type="password" name="password" placeholder="Senha" required autocomplete="current-password">
            </div>

            @error('password')
                <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
            @enderror

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <span class="password-element">
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </span>
                @endif
            </div>

            <figure class="button">
                <button type="submit">
                    <img src="{{ asset('img/group95.svg') }}" alt="Seta">
                </button>
            </figure>

            <span class="register-element">Ainda não tem conta?
                <a href="{{ route('register') }}">Registrar-se</a>
            </span>
        </form>
    </div>
</body>
</html>