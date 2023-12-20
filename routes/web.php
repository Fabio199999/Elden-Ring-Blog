<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('Welcome');


Route::get('pagina-1', [PublicController::class, 'Pagina1'])->name('Pagina1');

Route::get('pagina-2', [PublicController::class, 'Pagina2'] )->name('Pagina2');

Route::get('pagina-3', function (){
    return view('Pagina3');
})->name('Pagina3');

Route::get('Classi', [PublicController::class, 'Classi'])->name('classi');

Route::get('/classi/show/{classId}', [PublicController::class, 'showClass'])->name('show');


?>