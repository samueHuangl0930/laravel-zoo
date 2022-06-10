<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\areasController;
use App\Http\Controllers\Api\speciesarchivesController;
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
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/animal_file', function () {
    return view('animal_file');
});

// Route::get('/area', function () {
//     return view('area');
// });
Route::get('/area', [areasController::class, 'index']);

Route::get('/person', function () {
    return view('person');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
