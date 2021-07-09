<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eSponsor-Zarate Facundo</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/HomeComponents/formtweet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/HomeComponents/tweets-section.css') }}" rel="stylesheet">
</head>

<body>

    <div class="topnav" id="topnav">
        <a href="#" style="display:flex">
            <h4 id="home" style="margin: auto">Home</h4>
            <img src="{{ asset('images/logo.svg') }}" alt="">
        </a>
        <a>
            <form action="{{ 'logout' }}" method="POST">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        </a>
    </div>
    

    <div id="form-tweet-section">
        <x-home.form-tweet />
    </div>

    <section id="tweets-section">
        <h3>Tweets</h3>
        @foreach ($tweets as $tweet)
            <x-home.card-tweet :tweet="$tweet" />
        @endforeach
    </section>

</body>
<script src="{{ asset('js/scroll-bar.js') }}"></script>

</html>

<!--
    Utilizar un componente Blade, me ayuda a evitar el código spaghetti y mantener
        una buena legibilidad y reutilización del código.    
-->
