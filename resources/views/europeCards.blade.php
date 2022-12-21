<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style_countries.css')}}">
    <title>Laravel - Europe</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Le città più belle in Europa</h1>
            <div class="cities">
                @foreach ($cities as $city)
                    <div class="card">
                        <img src="{{$city['path']}}" alt="{{$city['name']}} image">
                        <h2>{{$city['name']}}</h2>
                        <p>{{$city['description']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <a class="btn-home" href="/">Home</a>
    </footer>
</body>
</html>
