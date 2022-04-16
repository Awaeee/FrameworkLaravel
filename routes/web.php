<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Задание 1
Route::get('my-name', function () {
    return ('Кайзерова Анна Евгеньевна');
});
//Задание 2
Route::get('my-friend', function () {
    return ('Косвинцева Ксения Витальевна');
});
//Задание 3
Route::get('get-friend/{name}', function ($name) {
    $name ='is42-kosvintsevakv';
    return 'Login: '.$name;
});
//Задание 4
Route::get('my-city/{city}', function ($city) {
    return $city ;
});
//Задание 5
Route::get('level/{lvl}', function ($lv) {

    if($lv>=0 && $lv<=25){
        echo 'Новичок!';
    }
    if($lv>=26 && $lv<=50){
        echo 'Специалист!';
    }
    if($lv>=51 && $lv<=75){
        echo 'Босс!';
    }
    if($lv>=76 && $lv<=98){
        echo 'Старик!';
    }
    if($lv==99){
        echo 'Король!';
    }
});
//Задание 6


