<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;

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
    // return view('welcome');
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/prices', function () {
    return view('prices');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/socials', function () {
    return view('socials');
});

Route::get('/post/create', function () {
    DB::table('Post')->insert([
        'title'=>'Nursat life',
        'body'=>'Hello I am Nursat'
    ]);
});

Route::get('/post', [BlogController::class,'index']); 