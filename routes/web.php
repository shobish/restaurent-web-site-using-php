<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\reservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/** home panal**/
Route::get("/", [homeControl::class, "index"]);
/** home panal end**/

/** admin panal**/
Route::get("/users", [adminController::class, "usercontroller"]);

Route::get("/foodmenu", [adminController::class, "foodmenu"]);

Route::get("/foodmenu", [adminController::class, "foodMenuList"]);

Route::get("/deleteFoodList/{id}", [adminController::class, "deleteFoodList"]);

Route::get("/updateview/{id}", [adminController::class, "updateview"]);

Route::post("/updateFoodList/{id}", [adminController::class, "updateList"]);

Route::post("/formUpload", [adminController::class, "foodUpload"]);

Route::get("/deleteUser/{id}", [adminController::class, "deleteUser"]);

Route::get("redirect", [homeControl::class, "redirect"]);
/** admin panal end**/

/** reservation panal**/
Route::get('/reservation', [reservationController::class, "reservationMenu"]);
Route::post('/reservation', [reservationController::class, "reservation"]);

/** reservation panal end**/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
