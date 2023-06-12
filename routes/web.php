<?php

use App\Http\Controllers\Admins;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\credCivicos;
use App\Http\Controllers\credCulturales;
use App\Http\Controllers\credDeportivos;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Notas;
use App\Http\Controllers\pdfController;
use App\Models\credCivico;
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
Route::get('/admin/eliminarUsuario/{id}',[Admins::class, 'show'])->name('showUsuario');
Route::delete('/admin/destroy/{id}',[Admins::class, 'destroy'])->name('destroyUsuario');


Route::get('/admin/estudiantes/estudiantesRegistrados', [Estudiantes::class, 'index'])->name('estudiantesIndex');
Route::get('/admin/estudiantes/nuevoEstudiante', [Estudiantes::class, 'create'])->name('nuevoEstudiante');
Route::post('/admin/estudiantes/store', [Estudiantes::class, 'store']);


Route::get('/admin/estudiantes/creditosDeportivos', [credDeportivos::class, 'index'])->name('deportivos');
Route::get('/admin/estudiantes/nuevoCredDeportivo', [credDeportivos::class, 'create'])->name('nuevoCredDeportivo');
Route::post('/admin/estudiantes/nuevoCredDeportivo/store', [credDeportivos::class, 'store'])->name('nuevoDeportivo');
Route::get('/admin/estudiantes/moocDeportivos/nuevoMoocDeportivo/{id}', [credDeportivos::class, 'vistaMooc'])->name('nuevoMooc');
Route::put('/admin/estudiantes/moocDeportivos/nuevoMoocDeportivo/{id}',[credDeportivos::class, 'editarMooc'])->name('editarMooc');
Route::get('/admin/estudiantes/moocDeportivos/nuevaEvidenciaDeportivo/{id}', [credDeportivos::class, 'vistaEvidencia'])->name('nuevaEvidencia');
Route::put('/admin/estudiantes/moocDeportivos/nuevaEvidenciaDeportivo/{id}',[credDeportivos::class, 'editarEvidencia'])->name('editarEvidencia');
Route::get('/admin/estudiantes/eliminarMoocDeportivos/{id}',[credDeportivos::class, 'show'])->name('eliminarMoocDeportivos');
Route::delete('/admin/estudiantes/eliminarMoocDeportivos/{id}',[credDeportivos::class, 'eliminarMooc'])->name('destroyMooc');
Route::get('/admin/estudiantes/eliminarEvidenciaDeportivos/{id}',[credDeportivos::class, 'showEvidencia'])->name('eliminarEvidenciaDeportivos');
Route::delete('/admin/estudiantes/eliminarEvidenciaDeportivos/{id}',[credDeportivos::class, 'eliminarEvidencia'])->name('destroyEvidencia');
Route::get('/admin/estudiantes/eliminarRegistro/{id}',[credDeportivos::class, 'showRegistro'])->name('show');
Route::delete('/admin/estudiantes/eliminarRegistro/{id}',[credDeportivos::class, 'destroy'])->name('destroy');
Route::get('/admin/estudiantes/liberacion/{id}', [credDeportivos::class, 'liberacion'])->name('liberacion');
Route::put('/admin/estudiantes/liberacion/actualizarLiberacion/{id}', [credDeportivos::class, 'actualizarLiberacion'])->name('actualizarLiberacion');


Route::get('/admin/estudiantes/civicos/creditosCivicos', [credCivicos::class, 'index'])->name('civicos');
Route::get('/admin/estudiantes/civicos/nuevoCredCivico', [credCivicos::class, 'create'])->name('nuevoCredCivico');
Route::post('/admin/estudiantes/civicos/nuevoCredCivico/store', [credCivicos::class, 'store'])->name('nuevoCivico');
Route::get('/admin/estudiantes/civicos/nuevoMoocCivico/{id}', [credCivicos::class, 'vistaMoocCivico'])->name('nuevoMoocCivico');
Route::put('/admin/estudiantes/civicos/nuevoMoocCivico/{id}',[credCivicos::class, 'editarMoocCivico'])->name('editarMoocCivico');
Route::get('/admin/estudiantes/civicos/nuevaEvidenciaCivicos/{id}', [credCivicos::class, 'vistaEvidencia'])->name('nuevaEvidenciaCivicos');
Route::put('/admin/estudiantes/civicos/nuevaEvidenciaCivicos/{id}',[credCivicos::class, 'editarEvidencia'])->name('editarEvidenciaCivicos');
Route::get('/admin/estudiantes/civicos/eliminarMoocCivicos/{id}',[credCivicos::class, 'show'])->name('eliminarMoocCivicos');
Route::delete('/admin/estudiantes/civicos/eliminarMoocCivicos/{id}',[credCivicos::class, 'eliminarMooc'])->name('destroyMoocCivicos');
Route::get('/admin/estudiantes/civicos/eliminarEvidenciaCivicos/{id}',[credCivicos::class, 'showEvidencia'])->name('eliminarEvidenciaCivicos');
Route::delete('/admin/estudiantes/civicos/eliminarEvidenciaCivicos/{id}',[credCivicos::class, 'eliminarEvidencia'])->name('destroyEvidenciaCivicos');
Route::get('/admin/estudiantes/civicos/eliminarRegistro/{id}',[credCivicos::class, 'showRegistro'])->name('showCivicos');
Route::delete('/admin/estudiantes/civicos/eliminarRegistro/{id}',[credCivicos::class, 'destroy'])->name('destroyCivicos');
Route::get('/admin/estudiantes/civicos/liberacion/{id}', [credCivicos::class, 'liberacion'])->name('liberacionCivico');
Route::put('/admin/estudiantes/civicos/liberacion/{id}', [credCivicos::class, 'actualizarLiberacion'])->name('actualizarLiberacionCivico');


Route::get('/admin/estudiantes/culturales/creditosCulturales', [credCulturales::class, 'index'])->name('culturales');
Route::get('/admin/estudiantes/culturales/nuevoCredCultural', [credCulturales::class, 'create'])->name('nuevoCredCultural');
Route::post('/admin/estudiantes/culturales/nuevoCredCultural/store', [credCulturales::class, 'store'])->name('nuevoCultural');
Route::get('/admin/estudiantes/culturales/nuevoMoocCulturales/{id}', [credCulturales::class, 'vistaMoocCultural'])->name('nuevoMoocCultural');
Route::put('/admin/estudiantes/culturales/nuevoMoocCultural/{id}',[credCulturales::class, 'editarMoocCultural'])->name('editarMoocCultural');
Route::get('/admin/estudiantes/culturales/nuevaEvidenciaCulturales/{id}', [credCulturales::class, 'vistaEvidencia'])->name('nuevaEvidenciaCulturales');
Route::put('/admin/estudiantes/culturales/nuevaEvidenciaCulturales/{id}',[credCulturales::class, 'editarEvidencia'])->name('editarEvidenciaCulturales');
Route::get('/admin/estudiantes/culturales/eliminarMoocCulturales/{id}',[credCulturales::class, 'show'])->name('eliminarMoocCulturales');
Route::delete('/admin/estudiantes/culturales/eliminarMoocCulturales/{id}',[credCulturales::class, 'eliminarMooc'])->name('destroyMoocCulturales');
Route::get('/admin/estudiantes/culturales/eliminarEvidenciaCulturales/{id}',[credCulturales::class, 'showEvidencia'])->name('eliminarEvidenciaCulturales');
Route::delete('/admin/estudiantes/culturales/eliminarEvidenciaCulturales/{id}',[credCulturales::class, 'eliminarEvidencia'])->name('destroyEvidenciaCulturales');
Route::get('/admin/estudiantes/culturales/eliminarRegistro/{id}',[credCulturales::class, 'showRegistro'])->name('showCulturales');
Route::delete('/admin/estudiantes/culturales/eliminarRegistro/{id}',[credCulturales::class, 'destroy'])->name('destroyCulturales');
Route::get('/admin/estudiantes/culturales/liberacion/{id}', [credCulturales::class, 'liberacion'])->name('liberacionCultural');
Route::put('/admin/estudiantes/culturales/liberacion/{id}', [credCulturales::class, 'actualizarLiberacion'])->name('actualizarLiberacionCultural');

Route::get('/admin/notas/notas', [Notas::class, 'index'])->name('notas');
Route::get('/admin/notas/nuevaNota', [Notas::class, 'create'])->name('nuevaNota');
Route::post('/admin/notas/nuevaNota/store', [Notas::class, 'store'])->name('guardarNota');
Route::get('/admin/notas/actualizarNota/{id}', [Notas::class, 'edit'])->name('vistaEditarNota');
Route::put('/admin/notas/actualizarNota/{id}',[Notas::class, 'updateNota'])->name('updateNota');
Route::get('/admin/notas/eliminarNota/{id}',[Notas::class, 'show'])->name('showNota');
Route::delete('/admin/notas/eliminarNota/{id}',[Notas::class, 'destroy'])->name('destroyNota');
