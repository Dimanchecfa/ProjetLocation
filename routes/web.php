<?php

use App\Models\Article;
use App\Models\Client;
use App\Models\TypeArticle;
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

Route::get('/articles', function () {
    return Article::with("type")->get();
});

Route::get('/types', function () {
    return TypeArticle::with("articles")->paginate(5);
});
Route::get('/client' , function(){
    return Client::pagination(5);
});

Auth::routes();
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
