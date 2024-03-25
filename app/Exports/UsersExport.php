<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Empleado;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view("exportEmpleados",[
            'empleados'=> Empleado::all()
        ]);
    }
    // public function collection()
    // {
    //     return User::all();
    // }
}
