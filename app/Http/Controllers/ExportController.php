<?php

namespace App\Http\Controllers;

use App\Exports\EmpleadoExport;
use Illuminate\Http\Request;
use App\Models\Empleado;

use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export(){

        $empleados = Empleado::all();
        return Excel::download(new EmpleadoExport,'empleados.xlsx');
    }
}
