<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController

};

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




Route::get('/login', function () {

    /*
    $ip = "189.14.134.29";
    return Cache::remember("countryCodeIp{$ip}",60*5,function () use ($ip) {

            $response = Http::get ("https://freegeoip.app/json/{$ip}" );

            if ($response->status()!=200){
                return 'US';
            }

            $countryCode = $response->json('country_code','US');

            if (empty($countryCode)){
                return 'US';
            }

            return $countryCode;

    });
    */

    return view('users.login');
})->name('login');

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/signup', function () {
    return view('users.signup');
})->name('signup');

Route::get('/recovery', function () {
    return view('users.recovery');
})->name('recovery');
