<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return view('welcome');
});

Route::get("pertambahan", [UserController::class,"pertambahan"]);
Route::get("perkalian/{angka1}/{angka2}", [UserController::class,"perkalian"]);

Route::get("/pertambahan", function ()
{
    return "Ini halaman pertambahan";
});

Route::get("perkalian/{angka1}/{angka2}", function ($angka1, $angka2)
{
    $num1 = (int)$angka1;
    $num2 = (int)$angka2;
    $hasil = $num1 * $num2;
    return "Hasilnya: {$hasil}";
});