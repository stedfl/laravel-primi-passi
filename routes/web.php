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
            'name'=> 'New York, New York',
            'path'=> 'https://cdn.getyourguide.com/img/location/5ffeb528d3d6f.jpeg/68.jpg',
            'description'=> 'E\' una città degli Stati Uniti d\'America situata nello stato di New York'
        ],
        [
            'name'=> 'San Francisco, California',
            'path'=> 'https://cdn.travelpulse.com/images/d3a9edf4-a957-df11-b491-006073e71405/e864929d-127a-4caf-9a15-7f9cd45160f0/630x355.jpg',
            'description'=> 'E\' una città statunitense, la quarta della California per numero di abitanti (dopo Los Angeles, San Diego e San Jose), con una popolazione stimata nel 2019 di 881.549 abitanti, stima che la colloca al dodicesimo posto fra le città più popolate degli Stati Uniti d\'America e allo stesso tempo al secondo posto per densità di popolazione, dietro a New York.'
        ],
        [
            'name'=> 'Los Angeles, California',
            'path'=> 'https://res.klook.com/image/upload/Mobile/City/uni4vfxknblsldmpxmxq.jpg',
            'description'=> 'E\' una città degli Stati Uniti capoluogo dell\'omonima contea nello Stato della California, è la città più grande dello stato della California, degli Stati Uniti occidentali e la seconda più popolosa del Paese dopo New York.'
        ]
    ];
    return view('northAmericaCards', compact('cities'));
});

Route::get('/europe', function() {
    $cities = [
        [
            'name'=> 'Londra, Regno Unito',
            'path'=> 'https://www.dltviaggi.it/immagine/17827/Londra%201.jpg',
            'description'=> 'E\'la capitale e maggiore città dell\'Inghilterra e del Regno Unito. La sua estensione territoriale la rende la terza città più estesa d\'Europa, preceduta da Mosca e Istanbul.'
        ],
        [
            'name'=> 'Parigi, Francia',
            'path'=> 'https://www.pugliablu.com/components/com_djclassifieds/images/item/753_parigi_thb.jpg',
            'description'=> 'E\' la capitale e la città più popolata della Francia, capoluogo della regione dell\'Île-de-France e l\'unico comune a essere nello stesso tempo dipartimento, secondo la riforma del 1977 e i dettami della legge PML che espansero i vecchi confini comunali.'
        ],
        [
            'name'=> 'Roma, Italia',
            'path'=> 'https://a.cdn-hotels.com/gdcs/production40/d811/5e89ad90-8f10-11e8-b6b0-0242ac110007.jpg?impolicy=fcrop&w=800&h=533&q=medium',
            'description'=> 'E\'la capitale d\'Italia. È inoltre capoluogo dell\'omonima città metropolitana e della regione Lazio. Il comune di Roma è dotato di un ordinamento amministrativo speciale, denominato Roma Capitale e disciplinato da legge dello Stato.'
        ]
    ];
    return view('europeCards', compact('cities'));
});

Route::get('/asia', function() {
    $cities = [
        [
            'name'=> 'Kyoto, Giappone',
            'path'=> 'http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcTTbXYQfDRNf0saKsyuiXsA7JTb80avhZPxsGMyGVM5c5q2QliRRjZseOHE2Plac66l',
            'description'=> 'E la città per eccellenza dei ciliegi in fiore; simbolo, del resto, del Giappone. Questa città ha parecchio da offrire: ricca di santuari, templi, giardini zen e palazzi, oltre che di storia e di tradizioni, è una delle città da non perdere, se avete deciso di trascorrere le vostre vacanze in Asia.'
        ],
        [
            'name'=> 'Mumbai, India',
            'path'=> 'https://s3.india.com/travel/wp-content/uploads/2014/09/Mumbai-Gateway-625x470.jpg',
            'description'=> 'Bombay in India è, oggi, nota come Mumbai ed è una delle attrazioni turistiche principali del Paese: templi, sculture, musei, biblioteche e il Parco Nazionale Sanjay Gandy, ovvero il vero polmone verde della città.'
        ],
        [
            'name'=> 'Kathmandu, Nepal',
            'path'=> 'https://assets.vogue.in/photos/5ce431b346cf5953f8b18c74/master/pass/featured.2.jpg',
            'description'=> 'Kathmandu in Nepal è una città che sorge nei pressi dell\'Himalaya: qui, tra i paesaggi mozzafiato, i templi indù, le pagode dorate e i palazzi medievali, non c\'è che l\'imbarazzo della scelta.'
        ]
    ];
    return view('asiaCards', compact('cities'));
});

Route::get('/africa', function() {
    $cities = [
        [
            'name'=> 'Il Cairo, Egitto',
            'path'=> 'https://images.lonelyplanetitalia.it/static/places/il-cairo-288.jpg?q=90&p=2400%7C1350%7Cmax&s=683eaee791450e0b66cdef376fc4f1bc',
            'description'=> 'La città del Cairo è famosa per le sue attrazioni affascinanti dove ci sono tanti siti archeologici meravigliosi e molte tappe da visitare durante il tuo Viaggio in Egitto.'
        ],
        [
            'name'=> 'Casablanca, Marocco',
            'path'=> 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/469000/469963-Hassan-Ii-Mosque.jpg',
            'description'=> 'È una città del Marocco occidentale, situata sulla costa dell\'Oceano Atlantico. Con una popolazione di più di 4 milioni di abitanti, Casablanca è la più grande città del Marocco.'
        ],
        [
            'name'=> 'Timbuctù, Mali',
            'path'=> 'https://qph.cf2.quoracdn.net/main-qimg-df61c14aacbd22b5307a265da759c17c-lq',
            'description'=> 'È un\'antica città del Nord del Mali. Da un punto di vista amministrativo, è un comune urbano, capoluogo del circondario e della regione omonimi.Grazie alle sue caratteristiche architettoniche è stata dichiarata patrimonio dell\'umanità dall\'UNESCO ed è stata proposta come una delle sette meraviglie moderne.'
        ]
    ];
    return view('africaCards', compact('cities'));
});
