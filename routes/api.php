<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;

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
/* individual
Route::get("categories", [CategoryController::class, 'index']);
Route::post("categories", [CategoryController::class, 'store']);
Route::get("categories/{category}", [CategoryController::class, 'show']);
Route::put("categories/{category}", [CategoryController::class, 'update']);
Route::delete("categories/{category}", [CategoryController::class, 'destroy']);
*/
Route::apiResource('categories', CategoryController::class);

Route::get("roles", [RoleController::class, 'index']);
Route::post("roles", [RoleController::class, 'store']);
Route::get("roles/{role}", [RoleController::class, 'show']);
Route::put("roles/{role}", [RoleController::class, 'update']);
Route::delete("roles/{role}", [RoleController::class, 'destroy']);

//Route::apiResource('roles', RoleController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('invoices', InvoiceController::class);