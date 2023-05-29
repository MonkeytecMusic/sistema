<?php

use App\Http\Controllers\Admins;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clients;
use App\Http\Controllers\credDeportivos;
use App\Http\Controllers\Estudiantes;
use Illuminate\Support\Facades\Route;

// Route::get('/nuevoUsuario', [AuthController::class, 'agregarNuevo'])->name('nuevoUsuario');

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/nuevoUsuario', [Admins::class, 'create'])->name('nuevoUsuario');
Route::post('/admin/store', [Admins::class, 'store']);
Route::get('/admin', [Admins::class, 'index'])->name('admin_index');
Route::get('/admin/registroUsuario', [Admins::class, 'registroUsuario'])->name('registros');
Route::get('/admin/actualizarUsuario/{id}', [Admins::class, 'edit'])->name('actualizar');
Route::put('/admin/update/{id}',[Admins::class, 'update'])->name('update');
Route::get('/admin/eliminarUsuario/{id}',[Admins::class, 'show'])->name('show');
Route::delete('/admin/destroy/{id}',[Admins::class, 'destroy'])->name('destroy');


Route::get('/admin/estudiantes/estudiantesRegistrados', [Estudiantes::class, 'index'])->name('estudiantesIndex');
Route::get('/admin/estudiantes/nuevoEstudiante', [Estudiantes::class, 'create'])->name('nuevoEstudiante');
Route::post('/admin/estudiantes/store', [Estudiantes::class, 'store']);
Route::get('/admin/estudiantes/creditosDeportivos/{item}', [credDeportivos::class, 'index'])->name('deportivos');
