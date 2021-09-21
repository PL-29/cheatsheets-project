<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VersionController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\CheatsheetController;
use App\Http\Controllers\TopicController;

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
/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('versions', VersionController::class);
Route::apiResource('countries', CountryController::class);
Route::apiResource('technologies', TechnologyController::class);
Route::apiResource('cheatsheets', CheatsheetController::class);
Route::apiResource('topics', TopicController::class);