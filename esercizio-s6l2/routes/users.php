<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Questa è l'opzione con il ritorno diretto della vista

/* Route::get('/', function () {
    return view('users');
}); */

// Questa è l'opzione con il controller

/* Route::get('/users', [UserController::class, 'index']); // Sposto il ritorno della vista all'interno del metodo 'show' di UsersController.php
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']); */

// Invece di invocare manualmente i singoli metodi del controller per ogni rotta, posso utilizzare la sintassi di sotto per invocare automaticamente il metodo corretto del controller in base alla rotta

Route::resource('/users', UserController::class);// ->only(['index', 'show']);
Route::resource('/users/{id}', UserController::class);

// per collegare solamente alcuni metodi del controller alla rotta corrispondente posso utilizzare only()
