<?php

use App\Exports\EmpleadoExport;
use App\Exports\UsersExport;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ScheduleController;
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

// Start Full Calender=================================================================
Route::get('fullcalender', [ScheduleController::class, 'index']);
Route::get('/events', [ScheduleController::class, 'getEvents']);
Route::get('/schedule/delete/{id}', [ScheduleController::class, 'deleteEvent']);
Route::post('/schedule/{id}', [ScheduleController::class, 'update']);
Route::post('/schedule/{id}/resize', [ScheduleController::class, 'resize']);
Route::get('/events/search', [ScheduleController::class, 'search']);

Route::view('add-schedule', 'schedule.add');
Route::post('create-schedule', [ScheduleController::class, 'create']);
// End Full Calender=================================================================


//Rutas para el FileManager
Route::get('/file', [FileController::class,'index']);
//Fin de las Rutas para el FileManager


//Rutas para Excel
// Route::get('users/export', function () {
//     return Excel::download(new UsersExport, 'users.xlsx');
// })->name('users.export');

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