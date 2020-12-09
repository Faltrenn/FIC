<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmController;

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

Route::get('/', [UmController::class, 'inicio']);

Route::get('/usuarios', [UmController::class, 'usuarios']);

// Route::get('/usuarios', function(){
//     $usuarios = [
//         "Emanuel",
//         "Maxsuel",
//         "Romerito",
//         "Curso"
//     ];
//     return view('usuarios', ['nomes' => $usuarios]);
// });

Route::get('/usuario/{nome}', [UmController::class, 'usuario']);
