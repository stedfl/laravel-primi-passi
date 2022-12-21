<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Laravel World</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    @foreach ($homeCountries as $country)
                    <li>
                        <a href="{{$country['route']}}">{{$country['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container cards">
            @foreach ($homeCountries as $country)
            <div class="card">
                <a href="{{$country['route']}}">
                    <img src="{{$country['path']}}" alt="{{$country['text']}} mappa">
                </a>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>
