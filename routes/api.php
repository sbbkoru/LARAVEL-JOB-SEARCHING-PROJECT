<?php

use App\Http\Controllers\API\v1\JobControllerAPI;
use App\Http\Controllers\API\v1\ProvinceControllerAPI;
use App\Models\Job;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function(){
    return 'API ROUTE';
});

Route::get('/jobs', [JobControllerAPI::class, 'index']);

/*
Route::get('/provinces', [ProvinceControllerAPI::class, 'index']);
Route::post('/provinces', [ProvinceControllerAPI::class, 'store']);
Route::get('/provinces/{id}', [ProvinceControllerAPI::class, 'show']);
Route::put('/provinces/{id}', [ProvinceControllerAPI::class, 'update']);
Route::delete('/provinces/{id}', [ProvinceControllerAPI::class, 'destroy']);
*/

Route::apiResource('provinces', ProvinceControllerAPI::class);
Route::get('provinces/search/{term}', [ProvinceControllerAPI::class, 'search']);
