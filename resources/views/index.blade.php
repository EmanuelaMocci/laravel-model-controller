<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="movies">
        <div class="navbar">
            <img src="https://mr.comingsoon.it/img/cs-logo.svg" alt="Logo">
            <ul>
                <li><a href="#">Film <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Serie TV <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">TV <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Star <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Streaming <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Trova Cinema <i class="fas fa-angle-down"></i></a></li>
            </ul>
            <i class="fas fa-search"></i>
        </div>

        <div class="movies">
            <h1>Movies</h1>
            <div class="movies-container">
                @foreach ($movies as $movie)
                <div class="details">
                    <h3>Titolo: {{$movie['title']}}</h3>
                    <h3>Titolo originale: {{$movie['original_title']}}</h3>
                    <h4>Nazionalità: {{$movie['nationality']}}</h4>
                    <h4>Data di uscita: {{$movie['date']}}</h4>
                    <h4>Voto: {{$movie['vote']}}</h4>
                </div>
                @endforeach
            </div>
            
</body>
</html>