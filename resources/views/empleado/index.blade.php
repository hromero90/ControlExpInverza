@extends('adminlte::page')

@section('title', 'ControlExpInverza')

@section('content_header')
    <h1>Lista de Trabajadores INVERZA</h1>
@stop

@section('content')

<a href="empleados/create" class="btn btn-primary mr-2">Crear</a>
<a href="empleado/export" class="btn btn-success mr-2">Exportar</a>
<a href="fullcalender" class="btn btn-warning">Calendario</a>

<table id="empleados" class="table table-striped table-bordered mt-2 shadow-lg" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Celular</th>
            <th scope="col">Estado</th>
            <th scope="col">Nomina</th>
            <th scope="col">INSS</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                {{-- <img src="{{asset('storage').'/'.$empleado->foto_Perfil}}" alt="" width="75" height="75"> --}}
                @if($empleado->foto_Perfil)
                        <!--
                        El helper asset generará la URL completa a la carpeta de avatares, asegurando que las imágenes se carguen correctamente independientemente de la ruta en la que te encuentres dentro de tu aplicación Laravel.
                        -->
                        <img src="{{ asset('foto_Perfils/' . $empleado->foto_Perfil) }}" alt="Avatar" width="50" height="60" />
                        @else
                        <img src="https://www.drmarket.com.mx/Archivos/Anuncios/sinImagenDefault.jpg" alt="Avatar" width="50" height="50" />
                        @endif
            </td>
            <td>{{$empleado->numero_Cedula}}</td>
            <td>{{$empleado->nombres}}</td>
            <td>{{$empleado->apellidos}}</td>
            <td>{{$empleado->celular}}</td>

            <td id="resp{{ $empleado->id }}">
                @if($empleado->estado == 'Activo')
                <button type="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Activo</button>
                    @else
                <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-ban"></i> Inactivo</button>
                @endif</td>

            <td>{{$empleado->nomina}}</td>

            <td>{{$empleado->inss}}</td>

            <td>
                <form action="{{ route ('empleados.destroy', $empleado->id) }}" method="POST">
                    <a href="/empleados/{{$empleado->id}}/edit" class="btn btn-warning btn-sm"> <i class="fas fa-pen"></i> </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i> </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">    
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
    new DataTable('#empleados');
</script>
@stop
