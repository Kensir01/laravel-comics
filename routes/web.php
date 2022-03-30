<?php

use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
    $comics = config('comics');


    return view('home',['comics' => $comics]);
})->name(('comics'));

Route::get('/comic_details/{comic_id}', function($comic_id){
    
    $comics = config('comics');

    if (is_numeric($comic_id) && $comic_id >= 0 && $comic_id <= count($comics)){
        $comic = $comics[$comic_id];
        return view('comic_details', ['comic'=>$comic]);
    }else{
        abort(404);
    }
})->name('comic_details');
