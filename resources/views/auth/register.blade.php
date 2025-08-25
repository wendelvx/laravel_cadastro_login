<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <h2>Cadastre-se</h2>

    {{-- ========================================================= --}}
    {{-- NOVO BLOCO PARA EXIBIR TODOS OS ERROS DE UMA VEZ --}}
    {{-- ========================================================= --}}
    @if ($errors->any())
        <div class="error-summary">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- ========================================================= --}}
    {{-- FIM DO BLOCO DE ERROS --}}
    {{-- ========================================================= --}}

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group">
            <input type="text" id="name" name="name" placeholder="Nome" value="{{ old('name') }}" required autofocus>
            {{-- REMOVIDO: @error('name') ... @enderror --}}
        </div>

        <div class="input-group">
            <input type="email" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
            {{-- REMOVIDO: @error('email') ... @enderror --}}
        </div>

        <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Senha" required>
            {{-- REMOVIDO: @error('password') ... @enderror --}}
        </div>

        <div class="input-group">
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repita a Senha" required>
        </div>

        <div class="checkbox">
            <input type="checkbox" id="termos" name="termos" required>
            <label for="termos">Concordo com os Termos da Plataforma</label>
            {{-- REMOVIDO: @error('termos') ... @enderror --}}
        </div>

        <button type="submit" class="btn">CADASTRAR</button>

        <div class="login-link">
            Já tem uma conta? <a href="{{ route('login') }}">Entrar</a>
        </div>
    </form>
</div>

</body>
</html>