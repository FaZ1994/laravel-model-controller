<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Model Controller</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Movies</h1>
    <div class="row no-wrap justify-content-center">
        @foreach ($movies as $movie)
        <div class="col-4 card m-4 justify-content-center "  data-aos="zoom-in" data-aos-duration="2000" >
        <ul>
                <li><strong>Titolo:</strong> {{$movie->title}} </li>
                <li><strong>Link:</strong> <a href="route('detail',$movie->id">{{$movie->title}}</a></li>
                <li><strong>Titolo originale:</strong> {{$movie->original_title}}</li>
                <li><strong>Nazionalità:</strong> {{$movie->nationality}}</li>
                <li><strong>Uscito il:</strong> {{$movie->date}}</li>
                <li><strong>Voto:</strong> {{$movie->vote}}</li>
        </ul>
        </div>
        @endforeach
    </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>