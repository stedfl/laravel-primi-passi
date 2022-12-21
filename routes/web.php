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
    $mapsCountries = [
        'North America'=>'https://www.signable.co.uk/wp-content/uploads/legal-world-north-america.webp',
        'Europa' =>'https://www.signable.co.uk/wp-content/uploads/legal-world-europe.webp',
        'Sud America' =>'https://www.signable.co.uk/wp-content/uploads/legal-world-south-america.webp',
        'Australia' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-australasia.webp',
        'Asia' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-asia.webp',
        'Africa' => 'https://www.signable.co.uk/wp-content/uploads/legal-world-africa.webp'
    ];
    return view('home', compact('mapsCountries'));
});
