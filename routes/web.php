<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ReporteController;

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

//Home
Route::get('/',[HomeController::class,'index'])->name('home.index');

//Reportes
Route::get('/reportes',[ReporteController::class,'index'])->name('reporte.index');
Route::get('/reportes/alumnos',[ReporteController::class,'pdfAlumnos'])->name('reporte.alumnos');
Route::get('/reportes/alumno/{id}',[ReporteController::class,'pdfAlumno'])->name('reporte.alumno');
Route::get('/reportes/aprobados',[ReporteController::class,'pdfAprobados'])->name('reporte.aprobados');
Route::get('/reportes/reprobados',[ReporteController::class,'pdfReprobados'])->name('reporte.reprobados');

Route::get('/resporte/excel', [ReporteController::class, 'excelAlumnos'])->name('reporte.excel');

// Grados
Route::get('/grados',[GradoController::class,'index'])->name('grados.index');
Route::get('/grados/crear',[GradoController::class,'create'])->name('grados.create');
Route::post('/grados/store', [GradoController::class,'store'])->name('grados.store');
Route::get('/grados/ver/{id}', [GradoController::class, 'show'])->name('grados.show');
Route::get('/grados/editar/{id}', [GradoController::class, 'edit'])->name('grados.edit');
Route::put('/grados/update/{id}', [GradoController::class, 'update'])->name('grados.update');
Route::delete('/grados/eliminar/{id}', [GradoController::class, 'destroy'])->name('grados.destroy');


//Alumno
Route::get('/alumnos',[AlumnoController::class,'index'])->name('alumnos.index');
Route::get('/alumnos/crear',[AlumnoController::class,'create'])->name('alumnos.create');
Route::post('/alumnos/store', [AlumnoController::class,'store'])->name('alumnos.store');
Route::get('/alumnos/ver/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('/alumnos/editar/{id}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/update/{id}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/eliminar/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');