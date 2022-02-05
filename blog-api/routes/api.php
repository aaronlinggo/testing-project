<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DetailUserController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix' => 'auth'
], function (){
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function(){
        Route::get('logout', 'App\Http\Controllers\AuthController@logout');
        Route::get('user', 'App\Http\Controllers\AuthController@user');
    });
});

// get api blog
Route::resource('/blog', BlogController::class)->except(['destroy', 'edit', 'create']);

// get api detail_user
Route::resource('/detailuser', DetailUserController::class)->except(['destroy', 'edit', 'create', 'store', 'show']);

// get api comment
Route::resource('/comment', CommentController::class)->except(['destroy', 'edit', 'create', 'show', 'update']);

// get api user
Route::resource('/user', UserController::class)->except(['destroy', 'edit', 'create', 'update', 'store', 'index']);
