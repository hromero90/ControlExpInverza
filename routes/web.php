<?php

use App\Exports\EmpleadoExport;
use App\Exports\UsersExport;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Models\Empleado;
use Maatwebsite\Excel\Facades\Excel;

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
Route::get('users/export', function () {
    return Excel::download(new UsersExport, 'users.xlsx');
})->name('users.export');

Route::get('empleado/export', function () {
    return Excel::download(new EmpleadoExport, 'empleado.xlsx');
})->name('empleado.export');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});