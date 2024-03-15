<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Models\Empleado;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleados','App\Http\Controllers\EmpleadoController');


//Rutas para el calendario
Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('calendar', [CalendarController::class,  'store'])->name('calendar.store');
Route::patch('calendar/update/{id}', [CalendarController::class,  'update'])->name('calendar.update');
Route::delete('calendar/destroy/{id}', [CalendarController::class,  'destroy'])->name('calendar.destroy');

//Rutas para Excel

// Route::get('empleados/excel', [EmpleadoController::class, 'excel'])->name('empleados.excel');
// Route::get('empleados/csv', [EmpleadoController::class, 'csv'])->name('empleados.csv');
// Route::get('empleados/pdf', [EmpleadoController::class, 'csv'])->name('empleados.pdf');
// Route::get('empleados/html', [EmpleadoController::class, 'html'])->name('empleados.html');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});