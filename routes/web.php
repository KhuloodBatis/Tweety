<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use Illuminate\Support\Facades\DB;
//to know what the sql query
// DB::listen(function ($query) {
//     var_dump($query->sql, $query->bindings);
// });

use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetController;
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


Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetController::class, 'store']);
    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');

    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit']);

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update']);


});
Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

Auth::routes();
Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');

Route::get('/explore', ExploreController::class)->name('explore');
