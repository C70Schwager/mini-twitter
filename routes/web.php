<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TweetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('tweets', function () {
//     return view('tweets.index');
// });

// Route::get('tweets/create', function () {
//     return view('tweets.create');
// });

// Route::get('tweets/show', function () {
//     return view('tweets.show');
// });




Route::get('tweets', [TweetController::class,'index'])->name('eingabe'); 

Route::get('tweets/create', [TweetController::class,'create']);

Route::post('tweets/store', [TweetController::class,'store']);

Route::get('tweets/{id}', [TweetController::class,'show']);

Route::delete('tweets/{id}', [TweetController::class, 'destroy'])-> name('tweets.destroy');