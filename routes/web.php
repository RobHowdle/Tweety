<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TweetLikesController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('tweets.dashboard', [
        'tweets' => auth()->user()->timeline()
    ]);
})->name('tweets/dashboard');

Route::middleware('auth')->group(function () {
    Route::get('tweets/dashboard', [HomeController::class, 'index']);
    Route::get('/tweets', [TweetsController::class, 'index']);
    Route::post('/tweets', [TweetsController::class, 'store']);

    Route::post('/tweets/{tweet}/like', [TweetLikesController::class, 'store']);
    Route::delete('/tweets/{tweet}/like', [TweetLikesController::class, 'delete']);

    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])->middleware('can:edit,user');
    Route::get('/explore', ExploreController::class);


});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');

