<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/comuni', [ApiController::class, 'comuni']);
Route::get('/comuni/codici', [ApiController::class, 'comuniCodici']);
Route::get('/comune/{codicecomune}', [ApiController::class, 'comuneCompleto']);
Route::get('/province', [ApiController::class, 'province']);
Route::get('/province/{regione}', [ApiController::class, 'provinceRegione']);
Route::get('/provincia/{provincia}/comuni', [ApiController::class, 'comuniProvincia']);
Route::get('/regioni', [ApiController::class, 'regioni']);
Route::get('/regione/{regione}/comuni', [ApiController::class, 'comuniRegione']);
Route::get('/sigle-auto', [ApiController::class, 'sigleAuto']);