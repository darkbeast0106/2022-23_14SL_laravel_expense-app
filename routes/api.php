<?php

use App\Models\Expense;
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

Route::get("/expense", function() {
    $expenses = Expense::all();
    return response()->json($expenses);
});

Route::post("/expense", function(Request $request) {
    $expense = new Expense();
    $expense->fill($request->all());
    $expense->save();
    return response()->json($expense, 201);
});
