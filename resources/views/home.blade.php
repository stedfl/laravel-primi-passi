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
                    <li>
                        <a href="#">Nord America</a>
                    </li>
                    <li>
                        <a href="#">Sud America</a>
                    </li>
                    <li>
                        <a href="#">Europa</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container cards">
            @foreach ($mapsCountries as $key=>$map)
            <div class="card">
                <a href="#">
                    <img src="{{$map}}" alt="{{$key}} mappa">
                </a>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>
