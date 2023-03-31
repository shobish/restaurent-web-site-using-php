<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeControl;
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

Route::get("/", [homeControl::class, "index"]);
Route::get("/users", [adminController::class, "usercontroller"]);
Route::get("/foodmenu", [adminController::class, "foodmenu"]);
Route::post("/formUpload", [adminController::class, "foodUpload"]);
Route::get("/deleteUser/{id}", [adminController::class, "deleteUser"]);
Route::get("redirect", [homeControl::class, "redirect"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
