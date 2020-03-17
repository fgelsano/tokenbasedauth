<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users Resource
Route::resource('users', 'UsersController');
/*
|        | GET|HEAD  | api/users              | users.index      | App\Http\Controllers\UsersController@index                             | api          |
|        | POST      | api/users              | users.store      | App\Http\Controllers\UsersController@store                             | api          |
|        | GET|HEAD  | api/users/create       | users.create     | App\Http\Controllers\UsersController@create                            | api          |
|        | GET|HEAD  | api/users/{user}       | users.show       | App\Http\Controllers\UsersController@show                              | api          |
|        | PUT|PATCH | api/users/{user}       | users.update     | App\Http\Controllers\UsersController@update                            | api          |
|        | DELETE    | api/users/{user}       | users.destroy    | App\Http\Controllers\UsersController@destroy                           | api          |
|        | GET|HEAD  | api/users/{user}/edit  | users.edit       | App\Http\Controllers\UsersController@edit                              | api          |
*/