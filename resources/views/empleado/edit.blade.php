@extends('adminlte::page')

@section('title', 'Editar registro')

@section('content_header')
<h4>Editar Registro de {{$empleado->nombres}} {{$empleado->apellidos}}</h4>
@stop

@section('content')
<form action="/empleados/{{$empleado->id}}" method="POST" class="employee-form mt-3" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!--Acordion de datos de los empleados control de expedientes-->
 <div class="accordion" id="accordionExample">
        <!--Datos Generales del Empleado-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                    Datos Personales
                </button>
            </h2>
           <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!--Formulario de los Datos Generales del Empleado-->
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="numero_Cedula">{{'Cedula'}}</label>
                                <input type="text" class="form-control mb-3" name="numero_Cedula" id="numero_Cedula"
                                    value="{{$empleado->numero_Cedula}}">
                            </div>
                            <div class="col">
                                <label for="nombres">{{'Nombres'}}</label>
                                <input type="text" class="form-control mb-3" name="nombres" id="nombres"
                                    value="{{$empleado->nombres}}">
                            </div>
                            <div class="col">
                                <label for="apellidos">{{'Apellidos'}}</label>
                                <input type="text" class="form-control mb-3" name="apellidos" id="apellidos"
                                    value="{{$empleado->apellidos}}">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="col">
                                    <label for="celular">{{'Celular'}}</label>
                                    <input type="text" class="form-control mb-3" name="celular" id="celular"
                                        value="{{$empleado->celular}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="municipio_Procedencia">{{'Municipio Procedencia'}}</label>
                                    <input type="text" class="form-control mb-3" name="municipio_Procedencia"
                                        id="municipio_Procedencia" value="{{$empleado->municipio_Procedencia}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="ubicacion_Actual">{{'Ubicacion Actual'}}</label>
                                    <input type="text" class="form-control mb-3" name="ubicacion_Actual"
                                        id="ubicacion_Actual" value="{{$empleado->ubicacion_Actual}}">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <div class="col">
                                    <label for="direccion_Domiciliar">{{'Direccion Domiciliar'}}</label>
                                    <input type="text" class="form-control mb-3" name="direccion_Domiciliar"
                                        id="direccion_Domiciliar" value="{{$empleado->direccion_Domiciliar}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="nomina">{{'Tipo de Nomina'}}</label>
                                    <select class="form-select mb-3" name="nomina" id="nomina">
                                        <option selected value="">Seleccione una opción</option>
                                            <?php
                                            $nominas = [
                                                "Administracion",
                                                "Supervisor",
                                                "Transporte",
                                                "Mecanico",
                                                "Mecanico Industrial",
                                                "Ayudante",
                                                "Estibadores",
                                                "Seguridad Fisica",
                                                "Servicios Multiples",
                                                "Mina Libertad"

                                            ];
                                            ?>
                                            @foreach ($nominas as $nomina) {
                                                <option value="{{ $nomina }}" {{ $nomina == $empleado->nomina ? 'selected' : '' }}>{{ $nomina }}</option>
                                            @endforeach
                                            }
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="tipo_Contrato">{{'Tipo de Contrato'}}</label>
                                    <select class="form-select mb-3" name="tipo_Contrato" id="tipo_Contrato">
                                        {{-- <option>Seleccione una opcion</option> --}}
                                        <option id="tipo_Contrato" value="{{$empleado->tipo_Contrato}}">Determinado
                                        </option>
                                        <option id="tipo_Contrato" value="{{$empleado->tipo_Contrato}}">Indeterminado
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <div class="col">
                                    <label class="form-label">Foto Actual del Empleado</label>
                                        @if($empleado->foto_Perfil)
                                            <img src="{{ asset('foto_Perfils/' . $empleado->foto_Perfil) }}" alt="Avatar" width="50" height="50" />
                                        @else
                                            <img src="https://www.drmarket.com.mx/Archivos/Anuncios/sinImagenDefault.jpg" alt="Avatar" width="50" height="50" />
                                        @endif
                                    {{-- <label for="foto_Perfil">{{'Foto de Perfil'}}</label>
                                    <br>
                                    <img class="img-thumbnail" src="{{asset('storage').'/'.$empleado->foto_Perfil}}"
                                        alt="" width="100" height="100">
                                    <br>
                                    <input type="file" class="form-control mb-3" name="foto_Perfil" id="foto_Perfil"
                                        value=""> --}}
                                        
                                            <label class="form-label">Cambiar Foto del empleado</label>
                                            <input class="form-control mb-3" type="file" name="foto_Perfil" id="foto_Perfil" accept="image/png, image/jpeg"/>
                                </div>
                            </div>
                            <div class="col">
                                <label for="estado" class="form-label">Estado</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" value="Activo"
                                                {!! $empleado->estado === 'Activo' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Activo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" value="Inactivo"
                                                {!! $empleado->estado === 'Inactivo' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                Inactivo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="expediente">{{'Numero de Expediente'}}</label>
                                    <input type="text" class="form-control mb-3" name="expediente"
                                        id="expediente" value="{{$empleado->expediente}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Documentos del Empleado-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Documentación
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <label for="doc_carnet_Bloqueo" class="form-label">Carnet Bloqueo</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_carnet_Bloqueo"
                                                    value="Si" {!! $empleado->doc_carnet_Bloqueo === 'Si' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_carnet_Bloqueo"
                                                    value="No" {!! $empleado->doc_carnet_Bloqueo === 'No' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_carnet_Bloqueo">{{'Carnet de Bloqueo'}}</label>
                                    <select class="form-select mb-3" name="doc_carnet_Bloqueo" id="doc_carnet_Bloqueo">

                                        <option id="doc_carnet_Bloqueo" value="{{$empleado->doc_carnet_Bloqueo}}">Si
                                        </option>
                                        <option id="doc_carnet_Bloqueo" value="{{$empleado->doc_carnet_Bloqueo}}">No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_carnet_Inverza" class="form-label">Carnet Inverza</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_carnet_Inverza"
                                                    value="Si" {!! $empleado->doc_carnet_Inverza === 'Si' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_carnet_Inverza"
                                                    value="No" {!! $empleado->doc_carnet_Inverza === 'No' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_carnet_Inverza">{{'Carnet de Inverza'}}</label>
                                    <select class="form-select mb-3" name="doc_carnet_Inverza" id="doc_carnet_Inverza">

                                        <option id="doc_carnet_Inverza" value="{{$empleado->doc_carnet_Inverza}}">Si
                                        </option>
                                        <option id="doc_carnet_Inverza" value="{{$empleado->doc_carnet_Inverza}}">No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_cedula" class="form-label">Cedula Actualizada</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_cedula"
                                                    value="Si" {!! $empleado->doc_cedula === 'Si' ? 'checked' : '' !!}
                                                >
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_cedula"
                                                    value="No" {!! $empleado->doc_cedula === 'No' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_cedula">{{'Cedula'}}</label>
                                    <select class="form-select mb-3" name="doc_cedula" id="doc_cedula">

                                        <option id="doc_cedula" value="{{$empleado->doc_cedula}}">Si</option>
                                        <option id="doc_cedula" value="{{$empleado->doc_cedula}}">No</option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="doc_contrato" class="form-label">Contrato</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_contrato"
                                                    value="Si" {!! $empleado->doc_contrato === 'Si' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_contrato"
                                                    value="No" {!! $empleado->doc_contrato === 'No' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_contrato">{{'Contrato'}}</label>
                                    <select class="form-select mb-3" name="doc_contrato" id="doc_contrato">

                                        <option id="doc_contrato" value="{{$empleado->doc_contrato}}">Si</option>
                                        <option id="doc_contrato" value="{{$empleado->doc_contrato}}">No</option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_colilla_Inss" class="form-label">Colilla del INSS</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_colilla_Inss"
                                                    value="Si" {!! $empleado->doc_colilla_Inss === 'Si' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_colilla_Inss"
                                                    value="No" {!! $empleado->doc_colilla_Inss === 'No' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_colilla_Inss">{{'Colilla de INSS'}}</label>
                                    <select class="form-select mb-3" name="doc_colilla_Inss" id="doc_colilla_Inss">

                                        <option id="doc_colilla_Inss" value="{{$empleado->doc_colilla_Inss}}">Si
                                        </option>
                                        <option id="doc_colilla_Inss" value="{{$empleado->doc_colilla_Inss}}">No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_hoja_Ingreso" class="form-label">Hoja de Ingreso</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_hoja_Ingreso"
                                                    value="Si" {!! $empleado->doc_hoja_Ingreso === 'Si' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_hoja_Ingreso"
                                                    value="No" {!! $empleado->doc_hoja_Ingreso === 'No' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_hoja_Ingreso">{{'Hoja de Ingreso'}}</label>
                                    <select class="form-select mb-3" name="doc_hoja_Ingreso" id="doc_hoja_Ingreso">

                                        <option id="doc_hoja_Ingreso" value="{{$empleado->doc_hoja_Ingreso}}">Si
                                        </option>
                                        <option id="doc_hoja_Ingreso" value="{{$empleado->doc_hoja_Ingreso}}">No
                                        </option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="doc_hoja_EPP" class="form-label">Hoja EPP</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_hoja_EPP"
                                                    value="Si" {!! $empleado->doc_hoja_EPP === 'Si' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_hoja_EPP"
                                                    value="No" {!! $empleado->doc_hoja_EPP === 'No' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_hoja_EPP">{{'Hoja EPP'}}</label>
                                    <select class="form-select mb-3" name="doc_hoja_EPP" id="doc_hoja_EPP">

                                        <option id="doc_hoja_EPP" value="{{$empleado->doc_hoja_EPP}}">Si</option>
                                        <option id="doc_hoja_EPP" value="{{$empleado->doc_hoja_EPP}}">No</option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_examen_General" class="form-label">Examen General</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_examen_General"
                                                    value="Si" {!! $empleado->doc_examen_General === 'Si' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_examen_General"
                                                    value="No" {!! $empleado->doc_examen_General === 'No' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_examen_General">{{'Examen General'}}</label>
                                    <select class="form-select mb-3" name="doc_examen_General" id="doc_examen_General">

                                        <option id="doc_examen_General" value="{{$empleado->doc_examen_General}}">Si
                                        </option>
                                        <option id="doc_examen_General" value="{{$empleado->doc_examen_General}}">No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_examen_Plomo" class="form-label">Examen de Plomo</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_examen_Plomo"
                                                    value="Si" {!! $empleado->doc_examen_Plomo === 'Si' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_examen_Plomo"
                                                    value="No" {!! $empleado->doc_examen_Plomo === 'No' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_examen_Plomo">{{'Examen de Plomo'}}</label>
                                    <select class="form-select mb-3" name="doc_examen_Plomo" id="doc_examen_Plomo">

                                        <option id="doc_examen_Plomo" value="{{$empleado->doc_examen_Plomo}}">Si
                                        </option>
                                        <option id="doc_examen_Plomo" value="{{$empleado->doc_examen_Plomo}}">No
                                        </option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col">
                                    <label for="doc_examen_Glucosa" class="form-label">Examen de Glucosa</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_examen_Glucosa"
                                                    value="Si" {!! $empleado->doc_examen_Glucosa === 'Si' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_examen_Glucosa"
                                                    value="No" {!! $empleado->doc_examen_Glucosa === 'No' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_examen_Glucosa">{{'Examen de Glucosa'}}</label>
                                    <select class="form-select mb-3" name="doc_examen_Glucosa" id="doc_examen_Glucosa">

                                        <option id="doc_examen_Glucosa" value="{{$empleado->doc_examen_Glucosa}}">Si
                                        </option>
                                        <option id="doc_examen_Glucosa" value="{{$empleado->doc_examen_Glucosa}}">No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_licencia_Conducir" class="form-label">Licencia de Conducir</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_licencia_Conducir" value="Si" {!!
                                                    $empleado->doc_licencia_Conducir === 'Si' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_licencia_Conducir" value="No" {!!
                                                    $empleado->doc_licencia_Conducir === 'No' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_licencia_Conducir">{{'Licencia de Conducir'}}</label>
                                    <select class="form-select mb-3" name="doc_licencia_Conducir"
                                        id="doc_licencia_Conducir">

                                        <option id="doc_licencia_Conducir" value="{{$empleado->doc_licencia_Conducir}}">
                                            Si
                                        </option>
                                        <option id="doc_licencia_Conducir" value="{{$empleado->doc_licencia_Conducir}}">
                                            No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_licencia_Soldador" class="form-label">Licencia de Soldador</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_licencia_Soldador" value="Si" {!!
                                                    $empleado->doc_licencia_Soldador === 'Si' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_licencia_Soldador" value="No" {!!
                                                    $empleado->doc_licencia_Soldador === 'No' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_licencia_Soldador">{{'Licencia de Soldador'}}</label>
                                    <select class="form-select mb-3" name="doc_licencia_Soldador"
                                        id="doc_licencia_Soldador">

                                        <option id="doc_licencia_Soldador" value="{{$empleado->doc_licencia_Soldador}}">
                                            Si
                                        </option>
                                        <option id="doc_licencia_Soldador" value="{{$empleado->doc_licencia_Soldador}}">
                                            No
                                        </option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="doc_licencia_Electricidad" class="form-label">Licencia de
                                        Electricista</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_licencia_Electricidad" value="Si" {!!
                                                    $empleado->doc_licencia_Electricidad === 'Si' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_licencia_Electricidad" value="No" {!!
                                                    $empleado->doc_licencia_Electricidad === 'No' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_licencia_Electricidad">{{'Licencia de Electricidad'}}</label>
                                    <select class="form-select mb-3" name="doc_licencia_Electricidad"
                                        id="doc_licencia_Electricidad">

                                        <option id="doc_licencia_Electricidad"
                                            value="{{$empleado->doc_licencia_Electricidad}}">Si</option>
                                        <option id="doc_licencia_Electricidad"
                                            value="{{$empleado->doc_licencia_Electricidad}}">No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_certificado_Salud" class="form-label">Certificado de Salud</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_certificado_Salud" value="Si" {!!
                                                    $empleado->doc_certificado_Salud === 'Si' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="doc_certificado_Salud" value="No" {!!
                                                    $empleado->doc_certificado_Salud === 'No' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_certificado_Salud">{{'Certificado de Salud'}}</label>
                                    <select class="form-select mb-3" name="doc_certificado_Salud"
                                        id="doc_certificado_Salud">

                                        <option id="doc_certificado_Salud" value="{{$empleado->doc_certificado_Salud}}">
                                            Si
                                        </option>
                                        <option id="doc_certificado_Salud" value="{{$empleado->doc_certificado_Salud}}">
                                            No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_record_Policia" class="form-label">Record de Policia</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_record_Policia"
                                                    value="Si" {!! $empleado->doc_record_Policia === 'Si' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_record_Policia"
                                                    value="No" {!! $empleado->doc_record_Policia === 'No' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_record_Policia">{{'Record de Policia'}}</label>
                                    <select class="form-select mb-3" name="doc_record_Policia" id="doc_record_Policia">

                                        <option id="doc_record_Policia" value="{{$empleado->doc_record_Policia}}">Si
                                        </option>
                                        <option id="doc_record_Policia" value="{{$empleado->doc_record_Policia}}">No
                                        </option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="doc_tarjeta_Covid" class="form-label">Tarjeta de COVID</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_tarjeta_Covid"
                                                    value="Si" {!! $empleado->doc_tarjeta_Covid === 'Si' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_tarjeta_Covid"
                                                    value="No" {!! $empleado->doc_tarjeta_Covid === 'No' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_tarjeta_Covid">{{'Tarjeta de COVID'}}</label>
                                    <select class="form-select mb-3" name="doc_tarjeta_Covid" id="doc_tarjeta_Covid">

                                        <option id="doc_tarjeta_Covid" value="{{$empleado->doc_tarjeta_Covid}}">Si
                                        </option>
                                        <option id="doc_tarjeta_Covid" value="{{$empleado->doc_tarjeta_Covid}}">No
                                        </option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="doc_tarjeta_Tetano" class="form-label">Tarjeta de Tetano</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_tarjeta_Tetano"
                                                    value="Si" {!! $empleado->doc_tarjeta_Tetano === 'Si' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="doc_tarjeta_Tetano"
                                                    value="No" {!! $empleado->doc_tarjeta_Tetano === 'No' ? 'checked' :
                                                '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="doc_tarjeta_Tetano">{{'Tarjeta de Tetano'}}</label>
                                    <select class="form-select mb-3" name="doc_tarjeta_Tetano" id="doc_tarjeta_Tetano">

                                        <option id="doc_tarjeta_Tetano" value="{{$empleado->doc_tarjeta_Tetano}}">Si
                                        </option>
                                        <option id="doc_tarjeta_Tetano" value="{{$empleado->doc_tarjeta_Tetano}}">No
                                        </option>
                                    </select> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Charla CEMEX-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Charla CEMEX
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <label for="induccion_Cemex" class="form-label">Inducción CEMEX</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="induccion_Cemex"
                                                    value="Si" {!! $empleado->induccion_Cemex === 'Si' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="induccion_Cemex"
                                                    value="No" {!! $empleado->induccion_Cemex === 'No' ? 'checked' : ''
                                                !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="induccion_Cemex">{{'Induccion CEMEX'}}</label>
                                    <select class="form-select mb-3" name="induccion_Cemex" id="induccion_Cemex">

                                        <option id="induccion_Cemex" value="{{$empleado->induccion_Cemex}}">Si</option>
                                        <option id="induccion_Cemex" value="{{$empleado->induccion_Cemex}}">No</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Charla Bonanza-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Charla Bonanza
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <label for="induccion_Ambiente_Bonanza" class="form-label">Inducción
                                        Ambiente</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="induccion_Ambiente_Bonanza" value="Si" 
                                                    value="Si" {!!$empleado->induccion_Ambiente_Bonanza === 'Si' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="induccion_Ambiente_Bonanza" 
                                                    value="No" {!!$empleado->induccion_Ambiente_Bonanza === 'No' ? 'checked' : '' !!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="induccion_Ambiente_Bonanza">{{'Induccion Ambiente'}}</label>
                                    <select class="form-select mb-3" name="induccion_Ambiente_Bonanza"
                                        id="induccion_Ambiente_Bonanza">

                                        <option id="induccion_Ambiente_Bonanza"
                                            value="{{$empleado->induccion_Ambiente_Bonanza}}">Si</option>
                                        <option id="induccion_Ambiente_Bonanza"
                                            value="{{$empleado->induccion_Ambiente_Bonanza}}">No</option>
                                    </select> --}}
                                </div>
                                <div class="col">
                                    <label for="induccion_Seguridad_Bonanza" class="form-label">Inducción
                                        Seguridad</label>
                                    <div class="col">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="induccion_Seguridad_Bonanza" 
                                                    value="Si" {!!$empleado->induccion_Seguridad_Bonanza === 'Si' ? 'checked' : ''!!}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="induccion_Seguridad_Bonanza" 
                                                    value="No" {!!$empleado->induccion_Seguridad_Bonanza === 'No' ? 'checked' : ''!!}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label for="induccion_Seguridad_Bonanza">{{'Induccion Seguridad'}}</label>
                                    <select class="form-select mb-3" name="induccion_Seguridad_Bonanza"
                                        id="induccion_Seguridad_Bonanza">

                                        <option id="induccion_Seguridad_Bonanza"
                                            value="{{$empleado->induccion_Seguridad_Bonanza}}">Si</option>
                                        <option id="induccion_Seguridad_Bonanza"
                                            value="{{$empleado->induccion_Seguridad_Bonanza}}">No</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Charla Limon-->
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive">
                    Charla Limón
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="induccion_General_Limon" class="form-label">Inducción General</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="induccion_General_Limon"
                                                value="Si" {!!$empleado->induccion_General_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="induccion_General_Limon"
                                                value="No" {!!$empleado->induccion_General_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="induccion_General_Limon">{{'Induccion General'}}</label>
                                <select class="form-select mb-3" name="induccion_General_Limon"
                                    id="induccion_General_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="induccion_General_Limon" value="Si">Si</option>
                                    <option id="induccion_General_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="protocolo_Covid_Limon" class="form-label">Protocolo COVID</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="protocolo_Covid_Limon"
                                                value="Si" {!!$empleado->protocolo_Covid_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="protocolo_Covid_Limon"
                                                value="No" {!!$empleado->protocolo_Covid_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="protocolo_Covid_Limon">{{'Protocolo COVID'}}</label>
                                <select class="form-select mb-3" name="protocolo_Covid_Limon"
                                    id="protocolo_Covid_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="protocolo_Covid_Limon" value="Si">Si</option>
                                    <option id="protocolo_Covid_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="prevencion_Incendios_Limon" class="form-label">Prevención de
                                    Incendios</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="prevencion_Incendios_Limon" 
                                                value="Si" {!!$empleado->prevencion_Incendios_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="prevencion_Incendios_Limon" 
                                                value="No" {!!$empleado->prevencion_Incendios_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="prevencion_Incendios_Limon">{{'Prevencion de Incendios'}}</label>
                                <select class="form-select mb-3" name="prevencion_Incendios_Limon"
                                    id="prevencion_Incendios_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="prevencion_Incendios_Limon" value="Si">Si</option>
                                    <option id="prevencion_Incendios_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="respuesta_Emergencia_Limon" class="form-label">Respuesta de
                                    Emergencia</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="respuesta_Emergencia_Limon" 
                                                value="Si" {!!$empleado->respuesta_Emergencia_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="respuesta_Emergencia_Limon" 
                                                value="No"  {!!$empleado->respuesta_Emergencia_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="respuesta_Emergencia_Limon">{{'Respuesta Emergencia'}}</label>
                                <select class="form-select mb-3" name="respuesta_Emergencia_Limon"
                                    id="respuesta_Emergencia_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="respuesta_Emergencia_Limon" value="Si">Si</option>
                                    <option id="respuesta_Emergencia_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="sistema_Cinco_Puntos_Limon" class="form-label">Sistema Cinco Puntos</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Cinco_Puntos_Limon" 
                                                value="Si"  {!!$empleado->sistema_Cinco_Puntos_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Cinco_Puntos_Limon" 
                                                value="No" {!!$empleado->sistema_Cinco_Puntos_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="sistema_Cinco_Puntos_Limon">{{'Sistema Cinco Puntos'}}</label>
                                <select class="form-select mb-3" name="sistema_Cinco_Puntos_Limon"
                                    id="sistema_Cinco_Puntos_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="sistema_Cinco_Puntos_Limon" value="Si">Si</option>
                                    <option id="sistema_Cinco_Puntos_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="manipulacion_Manual_Carga_Limon" class="form-label">Manipulacion
                                    Manual de Carga</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manipulacion_Manual_Carga_Limon" 
                                                value="Si" {!!$empleado->manipulacion_Manual_Carga_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manipulacion_Manual_Carga_Limon" 
                                                value="No" {!!$empleado->manipulacion_Manual_Carga_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manipulacion_Manual_Carga_Limon">{{'Manipulacion Manual
                                    Carga'}}</label>
                                <select class="form-select mb-3" name="manipulacion_Manual_Carga_Limon"
                                    id="manipulacion_Manual_Carga_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="manipulacion_Manual_Carga_Limon" value="Si">Si</option>
                                    <option id="manipulacion_Manual_Carga_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="manejo_Residuos_Limon" class="form-label">Manejo de Residuos</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manejo_Residuos_Limon"
                                                value="Si" {!!$empleado->manejo_Residuos_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manejo_Residuos_Limon"
                                                value="No" {!!$empleado->manejo_Residuos_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manejo_Residuos_Limon">{{'Manejo de Residuos'}}</label>
                                <select class="form-select mb-3" name="manejo_Residuos_Limon"
                                    id="manejo_Residuos_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="manejo_Residuos_Limon" value="Si">Si</option>
                                    <option id="manejo_Residuos_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="hiper_Limon" class="form-label">HIPER</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hiper_Limon" 
                                            value="Si" {!!$empleado->hiper_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hiper_Limon" 
                                            value="No"{!!$empleado->hiper_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="hiper_Limon">{{'HIPER'}}</label>
                                <select class="form-select mb-3" name="hiper_Limon" id="hiper_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="hiper_Limon" value="Si">Si</option>
                                    <option id="hiper_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="aps_Limon" class="form-label">APS</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aps_Limon" 
                                            value="Si" {!!$empleado->aps_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aps_Limon" 
                                            value="No" {!!$empleado->aps_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="aps_Limon">{{'APS'}}</label>
                                <select class="form-select mb-3" name="aps_Limon" id="aps_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="aps_Limon" value="Si">Si</option>
                                    <option id="aps_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="primeros_Auxilios_Teorico_Limon" class="form-label">Primeros Auxilios
                                    Teorico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Teorico_Limon" 
                                                value="Si" {!!$empleado->primeros_Auxilios_Teorico_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Teorico_Limon" 
                                                value="No" {!!$empleado->primeros_Auxilios_Teorico_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="primeros_Auxilios_Teorico_Limon">{{'Primeros Auxilios
                                    Teorico'}}</label>
                                <select class="form-select mb-3" name="primeros_Auxilios_Teorico_Limon"
                                    id="primeros_Auxilios_Teorico_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="primeros_Auxilios_Teorico_Limon" value="Si">Si</option>
                                    <option id="primeros_Auxilios_Teorico_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="primeros_Auxilios_Practico_Limon" class="form-label">Primeros Auxilios
                                    Practico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Practico_Limon" 
                                                value="Si" {!!$empleado->primeros_Auxilios_Practico_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Practico_Limon" 
                                                value="No"  {!!$empleado->primeros_Auxilios_Practico_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="primeros_Auxilios_Practico_Limon">{{'Primeros Auxilios
                                    Practico'}}</label>
                                <select class="form-select mb-3" name="primeros_Auxilios_Practico_Limon"
                                    id="primeros_Auxilios_Practico_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="primeros_Auxilios_Practico_Limon" value="Si">Si</option>
                                    <option id="primeros_Auxilios_Practico_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="manejo_Biodiversidad_Limon" class="form-label">Manejo de
                                    Biodiversidad</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Biodiversidad_Limon" 
                                                value="Si"  {!!$empleado->manejo_Biodiversidad_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Biodiversidad_Limon" 
                                                value="No" {!!$empleado->manejo_Biodiversidad_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manejo_Biodiversidad_Limon">{{'Manejo de Biodiversidad'}}</label>
                                <select class="form-select mb-3" name="manejo_Biodiversidad_Limon"
                                    id="manejo_Biodiversidad_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="manejo_Biodiversidad_Limon" value="Si">Si</option>
                                    <option id="manejo_Biodiversidad_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="operacion_Equipos_Livianos_Teorico_Limon" class="form-label">Operación de
                                    Equipos Livianos Teorico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Teorico_Limon" 
                                                value="Si" {!!$empleado->operacion_Equipos_Livianos_Teorico_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Teorico_Limon" 
                                                value="No" {!!$empleado->operacion_Equipos_Livianos_Teorico_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="operacion_Equipos_Livianos_Teorico_Limon">{{'Operacion Equipos Livianos
                                    Teorico'}}</label>
                                <select class="form-select mb-3" name="operacion_Equipos_Livianos_Teorico_Limon"
                                    id="operacion_Equipos_Livianos_Teorico_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="operacion_Equipos_Livianos_Teorico_Limon" value="Si">Si</option>
                                    <option id="operacion_Equipos_Livianos_Teorico_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="operacion_Equipos_Livianos_Practico_Limon" class="form-label">Operación de
                                    Equipos Livianos Practico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Practico_Limon" 
                                                value="Si" {!!$empleado->operacion_Equipos_Livianos_Practico_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Practico_Limon" 
                                                value="No" {!!$empleado->operacion_Equipos_Livianos_Practico_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="operacion_Equipos_Livianos_Practico_Limon">{{'Operacion Equipos
                                    Livianos
                                    Practico'}}</label>
                                <select class="form-select mb-3" name="operacion_Equipos_Livianos_Practico_Limon"
                                    id="operacion_Equipos_Livianos_Practico_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="operacion_Equipos_Livianos_Practico_Limon" value="Si">Si</option>
                                    <option id="operacion_Equipos_Livianos_Practico_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="manejo_Hidrocarburo_Limon" class="form-label">Manejo de
                                    Hidrocarburos</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Hidrocarburo_Limon" 
                                                value="Si" {!!$empleado->manejo_Hidrocarburo_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Hidrocarburo_Limon" 
                                                value="No" {!!$empleado->manejo_Hidrocarburo_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manejo_Hidrocarburo_Limon">{{'Manejo Hidrocarburo'}}</label>
                                <select class="form-select mb-3" name="manejo_Hidrocarburo_Limon"
                                    id="manejo_Hidrocarburo_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="manejo_Hidrocarburo_Limon" value="Si">Si</option>
                                    <option id="manejo_Hidrocarburo_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="bloqueo_Etiquetado_Limon" class="form-label">Bloqueo Etiquetado</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bloqueo_Etiquetado_Limon"
                                                value="Si" {!!$empleado->bloqueo_Etiquetado_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bloqueo_Etiquetado_Limon"
                                                value="No" {!!$empleado->bloqueo_Etiquetado_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="bloqueo_Etiquetado_Limon">{{'Bloqueo Etiquetado'}}</label>
                                <select class="form-select mb-3" name="bloqueo_Etiquetado_Limon"
                                    id="bloqueo_Etiquetado_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="bloqueo_Etiquetado_Limon" value="Si">Si</option>
                                    <option id="bloqueo_Etiquetado_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="sistema_Gestion_Social_Limon" class="form-label">Sistema de Gestión
                                    Social</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Gestion_Social_Limon" 
                                                value="Si" {!!$empleado->sistema_Gestion_Social_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Gestion_Social_Limon" 
                                                value="No" {!!$empleado->sistema_Gestion_Social_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="sistema_Gestion_Social_Limon">{{'Sistema Gestion Social'}}</label>
                                <select class="form-select mb-3" name="sistema_Gestion_Social_Limon"
                                    id="sistema_Gestion_Social_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="sistema_Gestion_Social_Limon" value="Si">Si</option>
                                    <option id="sistema_Gestion_Social_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="nuestro_Viaje_Seguridad_Limon" class="form-label">Nuestro Viaje
                                    Seguridad</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="nuestro_Viaje_Seguridad_Limon" 
                                                value="Si" {!!$empleado->nuestro_Viaje_Seguridad_Limon === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="nuestro_Viaje_Seguridad_Limon" 
                                                value="No" {!!$empleado->nuestro_Viaje_Seguridad_Limon === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="nuestro_Viaje_Seguridad_Limon">{{'Nuestro Viaje Seguridad'}}</label>
                                <select class="form-select mb-3" name="nuestro_Viaje_Seguridad_Limon"
                                    id="nuestro_Viaje_Seguridad_Limon">
                                    <option>Seleccione una opcion</option>
                                    <option id="nuestro_Viaje_Seguridad_Limon" value="Si">Si</option>
                                    <option id="nuestro_Viaje_Seguridad_Limon" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--Charla Libertad-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                    aria-expanded="false" aria-controls="collapseSix">
                    Charla Libertad
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="induccion_General_Libertad" class="form-label">Inducción General</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="induccion_General_Libertad" 
                                                value="Si" {!!$empleado->induccion_General_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="induccion_General_Libertad" 
                                                value="No" {!!$empleado->induccion_General_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="induccion_General_Libertad">{{'Induccion General'}}</label>
                                <select class="form-select mb-3" name="induccion_General_Libertad"
                                    id="induccion_General_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="induccion_General_Libertad" value="Si">Si</option>
                                    <option id="induccion_General_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="protocolo_Covid_Libertad" class="form-label">Protocolo COVID</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="protocolo_Covid_Libertad"
                                                value="Si" {!!$empleado->protocolo_Covid_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="protocolo_Covid_Libertad"
                                                value="No" {!!$empleado->protocolo_Covid_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="protocolo_Covid_Libertad">{{'Protocolo COVID'}}</label>
                                <select class="form-select mb-3" name="protocolo_Covid_Libertad"
                                    id="protocolo_Covid_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="protocolo_Covid_Libertad" value="Si">Si</option>
                                    <option id="protocolo_Covid_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="prevencion_Incendios_Libertad" class="form-label">Prevención de
                                    Incendios</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="prevencion_Incendios_Libertad" 
                                                value="Si" {!!$empleado->prevencion_Incendios_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="prevencion_Incendios_Libertad" 
                                                value="No" {!!$empleado->prevencion_Incendios_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="prevencion_Incendios_Libertad">{{'Prevencion de Incendios'}}</label>
                                <select class="form-select mb-3" name="prevencion_Incendios_Libertad"
                                    id="prevencion_Incendios_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="prevencion_Incendios_Libertad" value="Si">Si</option>
                                    <option id="prevencion_Incendios_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="respuesta_Emergencia_Libertad" class="form-label">Respuesta de
                                    Emergencia</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="respuesta_Emergencia_Libertad" 
                                                value="Si" {!!$empleado->respuesta_Emergencia_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="respuesta_Emergencia_Libertad" 
                                                value="No" {!!$empleado->respuesta_Emergencia_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="respuesta_Emergencia_Libertad">{{'Respuesta Emergencia'}}</label>
                                <select class="form-select mb-3" name="respuesta_Emergencia_Libertad"
                                    id="respuesta_Emergencia_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="respuesta_Emergencia_Libertad" value="Si">Si</option>
                                    <option id="respuesta_Emergencia_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="sistema_Cinco_Puntos_Libertad" class="form-label">Sistema Cinco
                                    Puntos</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Cinco_Puntos_Libertad" 
                                                value="Si" {!!$empleado->sistema_Cinco_Puntos_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Cinco_Puntos_Libertad" 
                                                value="No" {!!$empleado->sistema_Cinco_Puntos_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="sistema_Cinco_Puntos_Libertad">{{'Sistema Cinco Puntos'}}</label>
                                <select class="form-select mb-3" name="sistema_Cinco_Puntos_Libertad"
                                    id="sistema_Cinco_Puntos_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="sistema_Cinco_Puntos_Libertad" value="Si">Si</option>
                                    <option id="sistema_Cinco_Puntos_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="manipulacion_Manual_Carga_Libertad" class="form-label">Manipulacion
                                    Manual</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manipulacion_Manual_Carga_Libertad" 
                                                value="Si" {!!$empleado->manipulacion_Manual_Carga_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manipulacion_Manual_Carga_Libertad" 
                                                value="No" {!!$empleado->manipulacion_Manual_Carga_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manipulacion_Manual_Carga_Libertad">{{'Manipulacion Manual
                                    Carga'}}</label>
                                <select class="form-select mb-3" name="manipulacion_Manual_Carga_Libertad"
                                    id="manipulacion_Manual_Carga_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="manipulacion_Manual_Carga_Libertad" value="Si">Si</option>
                                    <option id="manipulacion_Manual_Carga_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="manejo_Residuos_Libertad" class="form-label">Manejo de Residuos</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manejo_Residuos_Libertad"
                                                value="Si" {!!$empleado->manejo_Residuos_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manejo_Residuos_Libertad"
                                                value="No" {!!$empleado->manejo_Residuos_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manejo_Residuos_Libertad">{{'Manejo de Residuos'}}</label>
                                <select class="form-select mb-3" name="manejo_Residuos_Libertad"
                                    id="manejo_Residuos_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="manejo_Residuos_Libertad" value="Si">Si</option>
                                    <option id="manejo_Residuos_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="hiper_Libertad" class="form-label">HIPER</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hiper_Libertad"
                                                value="Si" {!!$empleado->hiper_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hiper_Libertad"
                                                value="No" {!!$empleado->hiper_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="hiper_Libertad">{{'HIPER'}}</label>
                                <select class="form-select mb-3" name="hiper_Libertad" id="hiper_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="hiper_Libertad" value="Si">Si</option>
                                    <option id="hiper_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="aps_Libertad" class="form-label">APS</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aps_Libertad" 
                                            value="Si" {!!$empleado->aps_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aps_Libertad" 
                                            value="No" {!!$empleado->aps_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="aps_Libertad">{{'APS'}}</label>
                                <select class="form-select mb-3" name="aps_Libertad" id="aps_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="aps_Libertad" value="Si">Si</option>
                                    <option id="aps_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="primeros_Auxilios_Teorico_Libertad" class="form-label">Primeros Auxilios
                                    Teorico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Teorico_Libertad" 
                                                value="Si" {!!$empleado->primeros_Auxilios_Teorico_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Teorico_Libertad" 
                                                value="No" {!!$empleado->primeros_Auxilios_Teorico_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="primeros_Auxilios_Teorico_Libertad">{{'Primeros Auxilios
                                    Teorico'}}</label>
                                <select class="form-select mb-3" name="primeros_Auxilios_Teorico_Libertad"
                                    id="primeros_Auxilios_Teorico_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="primeros_Auxilios_Teorico_Libertad" value="Si">Si</option>
                                    <option id="primeros_Auxilios_Teorico_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="primeros_Auxilios_Practico_Libertad" class="form-label">Primeros Auxilios
                                    Practico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Practico_Libertad" 
                                                value="Si" {!!$empleado->primeros_Auxilios_Practico_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Practico_Libertad" 
                                                value="No" {!!$empleado->primeros_Auxilios_Practico_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="primeros_Auxilios_Practico_Libertad">{{'Primeros Auxilios
                                    Practico'}}</label>
                                <select class="form-select mb-3" name="primeros_Auxilios_Practico_Libertad"
                                    id="primeros_Auxilios_Practico_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="primeros_Auxilios_Practico_Libertad" value="Si">Si</option>
                                    <option id="primeros_Auxilios_Practico_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="manejo_Biodiversidad_Libertad" class="form-label">Manejo de
                                    Biodiversidad</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Biodiversidad_Libertad" 
                                                value="Si" {!!$empleado->manejo_Biodiversidad_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Biodiversidad_Libertad" 
                                                value="No" {!!$empleado->manejo_Biodiversidad_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manejo_Biodiversidad_Libertad">{{'Manejo de Biodiversidad'}}</label>
                                <select class="form-select mb-3" name="manejo_Biodiversidad_Libertad"
                                    id="manejo_Biodiversidad_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="manejo_Biodiversidad_Libertad" value="Si">Si</option>
                                    <option id="manejo_Biodiversidad_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="operacion_Equipos_Livianos_Teorico_Libertad" class="form-label">Operación de
                                    Equipos Livianos Teorico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Teorico_Libertad" 
                                                value="Si" {!!$empleado->operacion_Equipos_Livianos_Teorico_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Teorico_Libertad" 
                                                value="No" {!!$empleado->operacion_Equipos_Livianos_Teorico_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="operacion_Equipos_Livianos_Teorico_Libertad">{{'Operacion Equipos
                                    Livianos
                                    Teorico'}}</label>
                                <select class="form-select mb-3" name="operacion_Equipos_Livianos_Teorico_Libertad"
                                    id="operacion_Equipos_Livianos_Teorico_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="operacion_Equipos_Livianos_Teorico_Libertad" value="Si">Si</option>
                                    <option id="operacion_Equipos_Livianos_Teorico_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="operacion_Equipos_Livianos_Practico_Libertad" class="form-label">Operación
                                    de Equipos Livianos Practico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Practico_Libertad" 
                                                value="Si" {!!$empleado->operacion_Equipos_Livianos_Practico_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Practico_Libertad" 
                                                value="No" {!!$empleado->operacion_Equipos_Livianos_Practico_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="operacion_Equipos_Livianos_Practico_Libertad">{{'Operacion Equipos
                                    Livianos
                                    Practico'}}</label>
                                <select class="form-select mb-3" name="operacion_Equipos_Livianos_Practico_Libertad"
                                    id="operacion_Equipos_Livianos_Practico_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="operacion_Equipos_Livianos_Practico_Libertad" value="Si">Si</option>
                                    <option id="operacion_Equipos_Livianos_Practico_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="manejo_Hidrocarburo_Libertad" class="form-label">Manejo de
                                    Hidrocarburos</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Hidrocarburo_Libertad" 
                                                value="Si" {!!$empleado->manejo_Hidrocarburo_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Hidrocarburo_Libertad" 
                                                value="No" {!!$empleado->manejo_Hidrocarburo_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="manejo_Hidrocarburo_Libertad">{{'Manejo Hidrocarburo'}}</label>
                                <select class="form-select mb-3" name="manejo_Hidrocarburo_Libertad"
                                    id="manejo_Hidrocarburo_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="manejo_Hidrocarburo_Libertad" value="Si">Si</option>
                                    <option id="manejo_Hidrocarburo_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="bloqueo_Etiquetado_Libertad" class="form-label">Bloqueo Etiquetado</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="bloqueo_Etiquetado_Libertad" 
                                                value="Si" {!!$empleado->bloqueo_Etiquetado_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="bloqueo_Etiquetado_Libertad" 
                                                value="No" {!!$empleado->bloqueo_Etiquetado_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="bloqueo_Etiquetado_Libertad">{{'Bloqueo Etiquetado'}}</label>
                                <select class="form-select mb-3" name="bloqueo_Etiquetado_Libertad"
                                    id="bloqueo_Etiquetado_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="bloqueo_Etiquetado_Libertad" value="Si">Si</option>
                                    <option id="bloqueo_Etiquetado_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="sistema_Gestion_Social_Libertad" class="form-label">Sistema de Gestión
                                    Social</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Gestion_Social_Libertad" 
                                                value="Si" {!!$empleado->sistema_Gestion_Social_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Gestion_Social_Libertad" 
                                                value="No" {!!$empleado->sistema_Gestion_Social_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="sistema_Gestion_Social_Libertad">{{'Sistema Gestion Social'}}</label>
                                <select class="form-select mb-3" name="sistema_Gestion_Social_Libertad"
                                    id="sistema_Gestion_Social_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="sistema_Gestion_Social_Libertad" value="Si">Si</option>
                                    <option id="sistema_Gestion_Social_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="nuestro_Viaje_Seguridad_Libertad" class="form-label">Nuestro Viaje
                                    Seguridad</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="nuestro_Viaje_Seguridad_Libertad" 
                                                value="Si" {!!$empleado->nuestro_Viaje_Seguridad_Libertad === 'Si' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="nuestro_Viaje_Seguridad_Libertad" 
                                                value="No" {!!$empleado->nuestro_Viaje_Seguridad_Libertad === 'No' ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="nuestro_Viaje_Seguridad_Libertad">{{'Nuestro Viaje Seguridad'}}</label>
                                <select class="form-select mb-3" name="nuestro_Viaje_Seguridad_Libertad"
                                    id="nuestro_Viaje_Seguridad_Libertad">
                                    <option>Seleccione una opcion</option>
                                    <option id="nuestro_Viaje_Seguridad_Libertad" value="Si">Si</option>
                                    <option id="nuestro_Viaje_Seguridad_Libertad" value="No">No</option>
                                </select> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </div>
    <a href="/empleados" class="btn btn-danger mt-4 mb-3" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-4 mb-3" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@stop