<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\API\JugadorController;
use App\Http\Controllers\API\RegistroController;
use App\Http\Controllers\API\JuezController;
use App\Http\Controllers\API\DelegadoController;
use App\Http\Controllers\API\CampeonatoController;
use App\Http\Controllers\API\CategoriaController;


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

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);
//---------ruta de pre-registro
Route::post('/pre-registro', [RegistroController::class,'store']);

Route::group(['Middleware'=>'api'],function(){
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    //---------rutas jugador
    Route::get('/index-Jugador/{id}', [JugadorController::class,'index']);
    Route::post('/add-jugador', [JugadorController::class,'store']);
    Route::get('/listar-jugador',[JugadorController::class,'show']);
    Route::put('/editar-jugador/{id}', [JugadorController::class,'update']);
    Route::delete('/eliminar-jugador/{id}', [JugadorController::class,'destroy']);

    //---------rutas juez
    Route::get('/index', [JuezController::class,'index']);
    Route::post('/add-juez', [JuezController::class,'store']);
    Route::get('/listar-juez/{id}', [JuezController::class,'show']);
    Route::put('/editar-juez/{id}', [JuezController::class,'update']);
    Route::delete('/eliminar-juez/{id}', [JuezController::class,'destroy']);
    //---------rutas delegado
    Route::get('/index-Delegado/{id}', [DelegadoController::class,'index']);
    Route::post('/add-delegado', [DelegadoController::class,'store']);
    Route::get('/listar-delegado',[DelegadoController::class,'show']);
    Route::put('/editar-delegado/{id}', [DelegadoController::class,'update']);
    Route::delete('/eliminar-delegado/{id}', [DelegadoController::class,'destroy']);
    //
    Route::get('/index', [RegistroController::class,'index']);
    Route::get('/listar-registro/{id}', [RegistroController::class,'show']);
    Route::delete('/eliminar-registro/{id}', [RegistroController::class,'destroy']);
    //----------campeonato


    Route::get('/index-camp/{id}', [CampeonatoController::class,'index']);
    Route::post('/add-camp', [CampeonatoController::class,'store']);
    Route::get('/listar-camp',[CampeonatoController::class,'show']);
    Route::put('/editar-camp/{id}', [CampeonatoController::class,'update']);
    Route::delete('/eliminar-camp/{id}', [CampeonatoController::class,'destroy']);
    //-----------categoria
    Route::get('/index-cat/{id}', [CategoriaController::class,'index']);
    Route::post('/add-cat', [CategoriaController::class,'store']);
    Route::get('/listar-cat',[CategoriaController::class,'show']);
    Route::put('/editar-cat/{id}', [CategoriaController::class,'update']);
    Route::delete('/eliminar-cat/{id}', [CategoriaController::class,'destroy']);
});
