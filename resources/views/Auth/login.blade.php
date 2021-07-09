<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>eSponsor-Zarate Facundo</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">

        <div class="container">

            <img src="{{asset('images/logo.svg')}}" alt="">

            <form action="{{'login'}}"method="POST">
                <h2>Iniciar Sesión</h2>
                @csrf
                <input type="text" name="email" placeholder="Email o Nombre de usuario"required> <br>
                <input type="password" name="password" placeholder="Contraseña"required> <br>
                <button type="submit">Iniciar Sesión</button> <br>
                <a href="{{'register'}}">Registrarme</a> <br>
                <h5>{{session('message')}} </h5>
            </form>
            
        </div>
        
    </body>

    
</html>