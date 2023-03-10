<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formato',function(){
    $pdf = Pdf::loadView('plantilla');
    return $pdf->stream();
    // return view('plantilla');
});

Route::get('/google-fit/authorize', function () {
    $client = new \Google\Client();
    $client->setApplicationName('Vits');
    $client->setScopes([\Google\Service\Fitness::FITNESS_ACTIVITY_READ]);
    $client->setRedirectUri(url('/google-fit/callback'));
    $authUrl = $client->createAuthUrl();
    return redirect()->away($authUrl);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
