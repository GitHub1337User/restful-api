<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EquipmentTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// Route::group(['middleware' => 'api'], function () {
    Route::get('/equipment', [EquipmentController::class,'index']);
    Route::post('/equipment', [EquipmentController::class,'store']);
    Route::get('/equipment/{id}', [EquipmentController::class,'show']);
    Route::delete('/equipment/{id}', [EquipmentController::class,'destroy']);
    Route::get('/equipment-type', [EquipmentTypeController::class,'index']);
    Route::put('/equipment/{id}',[EquipmentController::class,'update']);

// });
// GET:/api/equipment/{id} 
// POST:/api/equipment 
// PUT:/api/equipment/{id}
// DELETE:/api/equipment/{id} 
// GET:/api/equipment-type
