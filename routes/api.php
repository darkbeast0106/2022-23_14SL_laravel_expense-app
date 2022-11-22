<?php

use App\Http\Controllers\API\ExpenseController;
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

Route::get("/hello", function() {
    return response()->json(["message" => "Hello World!"]);
});

/*
Route::get("/expense", [ExpenseController::class, 'index']);
Route::post("/expense", [ExpenseController::class, 'store']);
Route::get("/expense/{id}", [ExpenseController::class, 'show']);
Route::put("/expense/{id}", [ExpenseController::class, 'update']);
Route::patch("/expense/{id}", [ExpenseController::class, 'update']);
Route::delete("/expense/{id}", [ExpenseController::class, 'destroy']);
*/
Route::apiResource("/expense", ExpenseController::class);
