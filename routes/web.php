<?php
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Carro;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/carro',[CarroController::class,'formulario'])->name('carro');

Route::post('/salvar/carro',[CarroController::class,'salvar_carro'])->name('formulario_carro_salvar');

Route::get('/deleta_carro/{id}', [CarroController::class, 'deleta_carro']);

Route::post('/deleta_carro/carro',[CarroController::class,'deleta'])->name('deleta_carro');

Route::get('/alterar_carro/{id}', [CarroController::class, 'alterar_carro']); 

Route::get('/', function () {
    return view('dasboard');
});

require __DIR__.'/auth.php';
