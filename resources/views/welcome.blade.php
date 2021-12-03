<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda contactos</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/full.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="max-w-5xl mx-auto p-3">

<div class="flex flex-col" >

    <div class="text-center">
        <h1 class="mb-5 text-2xl font-bold">
            AGENDA DE CONTACTOS
        </h1>
        <p>INGRESAR AL SISTEMA</p>
    </div>

    <div class="flex justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>

    </div>


    <x-jet-validation-errors class="mb-4"/>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-control">
            <label class="label" for="username" value="{{ __('Username') }}"></label>
            <input id="username" type="username" name="username" :value="old('username')" required autofocus
                   placeholder="Nombre de usuario" class="input input-bordered">
        </div>

        <div class="form-control">
            <label class="label" for="password" value="{{ __('Password') }}"></label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                   placeholder="Contraseña" class="input input-bordered">
        </div>

        <div class="form-control mt-4">
            <button class="btn btn-primary">{{ __('Log in') }}</button>
        </div>

        <div class="form-control">
            <label class="label">
                @if (Route::has('password.request'))
                    <a class="label-text-alt" href="{{ route('password.request') }}">
                        ¿Olvido su contraseña?
                    </a>
                @endif
            </label>
        </div>
    </form>
</div>
</div>


</body>
</html>
