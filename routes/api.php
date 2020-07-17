<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['api']], function () {
    Route::apiResources([
      'departments' => 'API\DepartmentsController'
    ]);
});

Route::fallback(function () {
    return response()->json([
      'message' => 'Resource not found. If the problem persists please contact customer support.'
    ], 404);
});
