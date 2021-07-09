<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>eSponsor-Zarate Facundo</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">
        
    </head>
    <body class="antialiased">

        <div class="container">
            <img src="{{asset('images/logo.svg')}}" alt="">            
            <form action="" method="POST">
                <h2>Registrarme</h2>
                @csrf
                <input type="text" placeholder="Nombre y Apellido" name="name"required> <br>
                <input type="email" placeholder="Email" name="email"required> <br>
                <input type="text" placeholder="Nombre de usuario" name="username"required><br>
                <input type="password" placeholder="Contraseña" minlength="8" name="password"required><br>
                <button type="submit">Registrarme</button><br>
                <a href="/">Ya tengo una cuenta</a> <br>
                <h5>{{session('message')}} </h5>
            </form>
        </div>
        
    </body>
    
</html>