<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\Attribute\Required;

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
Route::get('/about', function () {
    $name = 'Ahmad';
    $age = "22";
    /*return view('about',['name'=>$name]);


    /*return view('about')->with('name', $name)
        ->with('age', $age);*/

    return view('about', compact('name', 'age'));
});

route::post('send', function (HttpRequest $request) {
    $name = $request->myname;
    return view('about', compact('name'));
});
