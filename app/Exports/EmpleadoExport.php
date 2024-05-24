<?php

namespace App\Exports;

use App\Models\Empleado;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmpleadoExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return[
            'ID',
            'Cedula',
            'Nombres',
            'Apellidos',
            'Celular',
            'Municipio Procedencia',
            'Ubicacion Actual',
            'Direccion Domiciliar',
            'Nomina',
            'Tipo de Contrato',
            'Estado',
            'Enlace Drive'
        ];
    }
    
    public function collection()
    {
        // return Empleado::all();
        return Empleado::select("id","numero_Cedula","nombres","apellidos","celular","municipio_Procedencia","ubicacion_Actual","direccion_Domiciliar","nomina","tipo_Contrato","estado","enlace_Drive")->get();
    }
}
