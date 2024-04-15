<table>
    <thead>
        <th>ID</th>
        <th>Cedula</th>
        <tr>Nombres</th>
        <th>Apellidos</th>
        <th>Celular</th>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->numero_Cedula}}</td>
                <td>{{$empleado->nombres}}</td>
                <td>{{$empleado->apellidos}}</td>
                <td>{{$empleado->celular}}</td>
            </tr>
        @endforeach
    </tbody>
</table>