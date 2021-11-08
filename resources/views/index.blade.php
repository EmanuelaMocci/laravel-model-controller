<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model</title>
</head>
<body>
    <h1>Movies</h1>

    <ul>
        @foreach ($movies as $movie)
           <li>
               <h3>Titolo: {{$movie['title']}}</h3>
               <h3>Titolo originale: {{$movie['original_title']}}</h3>
               <h4>Nazionalità: {{$movie['nationality']}}</h4>
               <h4>Data di uscita: {{$movie['date']}}</h4>
               <h4>Voto: {{$movie['vote']}}</h4>
            </li> 
        @endforeach
    </ul>
</body>
</html>