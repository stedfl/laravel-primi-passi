<?php

use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    $homeCountries = [
        [
            'text' => 'North America',
            'path' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-north-america.webp',
            'route' => '/north-america'
        ],
        [
            'text' => 'Europa',
            'path' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-europe.webp',
            'route' => '/europe'
        ],
        [
            'text' => 'Sud America',
            'path' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-south-america.webp',
            'route' => '/sud-america'
        ],
        [
            'text' => 'Australia',
            'path' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-australasia.webp',
            'route' => '/australia'
        ],
        [
            'text' => 'Asia',
            'path' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-asia.webp',
            'route' => '/asia'
        ],
        [
            'text' => 'Africa',
            'path' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-africa.webp',
            'route' => '/africa'
        ]
    ];
    return view('home', compact('homeCountries'));
});

Route::get('/north-america', function() {
    $cities = [
        [
            'name'=> 'New York',
            'path'=> 'https://cdn.getyourguide.com/img/location/5ffeb528d3d6f.jpeg/68.jpg',
            'description'=> 'E\' una città degli Stati Uniti d\'America situata nello stato di New York'
        ],
        [
            'name'=> 'San Francisco',
            'path'=> 'https://cdn.travelpulse.com/images/d3a9edf4-a957-df11-b491-006073e71405/e864929d-127a-4caf-9a15-7f9cd45160f0/630x355.jpg',
            'description'=> 'E\' una città statunitense, la quarta della California per numero di abitanti (dopo Los Angeles, San Diego e San Jose), con una popolazione stimata nel 2019 di 881.549 abitanti, stima che la colloca al dodicesimo posto fra le città più popolate degli Stati Uniti d\'America e allo stesso tempo al secondo posto per densità di popolazione, dietro a New York.'
        ],
        [
            'name'=> 'Los Angeles',
            'path'=> 'https://res.klook.com/image/upload/Mobile/City/uni4vfxknblsldmpxmxq.jpg',
            'description'=> 'E\' una città degli Stati Uniti capoluogo dell\'omonima contea nello Stato della California, è la città più grande dello stato della California, degli Stati Uniti occidentali e la seconda più popolosa del Paese dopo New York.'
        ]
    ];
    return view('northAmericaCards', compact('cities'));
});

Route::get('/europe', function() {
    $cities = [
        [
            'name'=> 'Londra',
            'path'=> 'https://www.dltviaggi.it/immagine/17827/Londra%201.jpg',
            'description'=> 'E\'la capitale e maggiore città dell\'Inghilterra e del Regno Unito. La sua estensione territoriale la rende la terza città più estesa d\'Europa, preceduta da Mosca e Istanbul.'
        ],
        [
            'name'=> 'Parigi',
            'path'=> 'https://www.pugliablu.com/components/com_djclassifieds/images/item/753_parigi_thb.jpg',
            'description'=> 'E\' la capitale e la città più popolata della Francia, capoluogo della regione dell\'Île-de-France e l\'unico comune a essere nello stesso tempo dipartimento, secondo la riforma del 1977 e i dettami della legge PML che espansero i vecchi confini comunali.'
        ],
        [
            'name'=> 'Roma',
            'path'=> 'https://a.cdn-hotels.com/gdcs/production40/d811/5e89ad90-8f10-11e8-b6b0-0242ac110007.jpg?impolicy=fcrop&w=800&h=533&q=medium',
            'description'=> 'E\'la capitale d\'Italia. È inoltre capoluogo dell\'omonima città metropolitana e della regione Lazio. Il comune di Roma è dotato di un ordinamento amministrativo speciale, denominato Roma Capitale e disciplinato da legge dello Stato.'
        ]
    ];
    return view('europeCards', compact('cities'));
});
