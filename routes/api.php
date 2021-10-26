<?php
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\TaskController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('horarios',HorarioController::class);
Route::resource('tasks',TaskController::class);
/*Route::get('horarios',[HorarioController::class,'index']);
Route::post('horarios',[HorarioController::class,'store']);
Route::get('horarios/{horario}',[HorarioController::class,'index']);
Route::put('horarios/{horario}',[HorarioController::class,'update']);
Route::delete('horarios/{horario}',[HorarioController::class,'destroy']);*/
