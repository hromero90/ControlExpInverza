@extends('adminlte::page')

@section('title', 'Ingresar nuevo registro')

@section('content_header')
<h1 class=" font-monospace">Ingresar Nuevo Registro</h1>
@stop

@section('content')
<form action="/empleados" method="POST" class="employee-form mt-3" enctype="multipart/form-data">
    @csrf
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
                                <input type="text" class="form-control mb-3" name="numero_Cedula" id="numero_Cedula">
                            </div>
                            <div class="col">
                                <label for="nombres">{{'Nombres'}}</label>
                                <input type="text" class="form-control mb-3" name="nombres" id="nombres">
                            </div>
                            <div class="col">
                                <label for="apellidos">{{'Apellidos'}}</label>
                                <input type="text" class="form-control mb-3" name="apellidos" id="apellidos">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="col">
                                    <label for="celular">{{'Celular'}}</label>
                                    <input type="text" class="form-control mb-3" name="celular" id="celular">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="municipio_Procedencia">{{'Municipio Procedencia'}}</label>
                                    <input type="text" class="form-control mb-3" name="municipio_Procedencia"
                                        id="municipio_Procedencia">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="ubicacion_Actual">{{'Ubicacion Actual'}}</label>
                                    <input type="text" class="form-control mb-3" name="ubicacion_Actual"
                                        id="ubicacion_Actual">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <div class="col">
                                    <label for="direccion_Domiciliar">{{'Direccion Domiciliar'}}</label>
                                    <input type="text" class="form-control mb-3" name="direccion_Domiciliar"
                                        id="direccion_Domiciliar">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="nomina">{{'Tipo de Nomina'}}</label>
                                    <select class="form-select mb-3" name="nomina" id="nomina">
                                        <option selected value="">Seleccione una opción</option>
                                            <?php
                                            $nominas = array(
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

                                            );
                                            foreach ($nominas as $nomina) {
                                                echo "<option value='$nomina'>$nomina</option>";
                                            }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="tipo_Contrato" class="form-label">Tipo de Contrato</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipo_Contrato" value="Determinado"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Determinado
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipo_Contrato" value="Indeterminado">
                                            <label class="form-check-label" for="gridRadios2">
                                                Indeterminado
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row align-items-end">
                            <!--Foto de Perfil-->
                            <div class="col">
                                <div class="col">
                                    <label class="form-label">Foto de Perfil</label>
                                    <input class="form-control mb-3" type="file" name="foto_Perfil" accept="image/png, image/jpeg" id="foto_Perfil"/>
                                </div>
                            </div>
                            <div class="col">
                                <label for="estado" class="form-label">Estado</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" value="Activo"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Activo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" value="Inactivo">
                                            <label class="form-check-label" for="gridRadios2">
                                                Inactivo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="inss">{{'INSS'}}</label>
                                    <input type="text" class="form-control mb-3" name="inss"
                                        id="inss">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Documentos del Empleado-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_carnet_Bloqueo"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_carnet_Inverza" class="form-label">Carnet Inverza</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_carnet_Inverza"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_carnet_Inverza"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_cedula" class="form-label">Cedula Actualizada</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_cedula" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_cedula" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <!--Manejar con fechas el incio y el final del contrato-->
                            <div class="col">
                                <label for="doc_contrato" class="form-label">Contrato</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_contrato" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_contrato" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_colilla_Inss" class="form-label">Colilla del INSS</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_colilla_Inss"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_colilla_Inss"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_hoja_Ingreso" class="form-label">Hoja de Ingreso</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_hoja_Ingreso"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_hoja_Ingreso"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="doc_hoja_EPP" class="form-label">Hoja EPP</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_hoja_EPP" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_hoja_EPP" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_examen_General" class="form-label">Examen General</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_examen_General"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_examen_General"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_examen_Plomo" class="form-label">Examen de Plomo</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_examen_Plomo"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_examen_Plomo"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="doc_examen_Glucosa" class="form-label">Examen de Glucosa</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_examen_Glucosa"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_examen_Glucosa"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_licencia_Conducir" class="form-label">Licencia de Conducir</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_licencia_Conducir"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_licencia_Conducir"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col">
                                <label for="doc_licencia_Soldador" class="form-label">Licencia de Soldador</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_licencia_Soldador"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_licencia_Soldador"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
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
                                                name="doc_licencia_Electricidad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="doc_licencia_Electricidad" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_certificado_Salud" class="form-label">Certificado de Salud</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_certificado_Salud"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_certificado_Salud"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="doc_record_Policia" class="form-label">Record de Policia</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_record_Policia"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_record_Policia"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="doc_tarjeta_Covid" class="form-label">Tarjeta de COVID</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_tarjeta_Covid"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_tarjeta_Covid"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <label for="doc_tarjeta_Tetano" class="form-label">Tarjeta de Tetano</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_tarjeta_Tetano"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="doc_tarjeta_Tetano"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="col">
                                    <label for="enlace_Drive">{{'Enlace Drive'}}</label>
                                    <input type="text" class="form-control mb-3" name="enlace_Drive"
                                        id="enlace_Drive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Charla CEMEX-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="induccion_Cemex"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="induccion_Cemex">{{'Induccion CEMEX'}}</label>
                                <select class="form-select mb-3" name="induccion_Cemex" id="induccion_Cemex">
                                    <option>Seleccione una opcion</option>
                                    <option id="induccion_Cemex" value="Si">Si</option>
                                    <option id="induccion_Cemex" value="No">No</option>
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
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour">
                    Charla Bonanza
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="induccion_Ambiente_Bonanza" class="form-label">Inducción Ambiente</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="induccion_Ambiente_Bonanza" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="induccion_Ambiente_Bonanza" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="induccion_Ambiente_Bonanza">{{'Induccion Ambiente'}}</label>
                                <select class="form-select mb-3" name="induccion_Ambiente_Bonanza"
                                    id="induccion_Ambiente_Bonanza">
                                    <option>Seleccione una opcion</option>
                                    <option id="induccion_Ambiente_Bonanza" value="Si">Si</option>
                                    <option id="induccion_Ambiente_Bonanza" value="No">No</option>
                                </select> --}}
                            </div>
                            <div class="col">
                                <label for="induccion_Seguridad_Bonanza" class="form-label">Inducción Seguridad</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="induccion_Seguridad_Bonanza" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="induccion_Seguridad_Bonanza" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <label for="induccion_Seguridad_Bonanza">{{'Induccion Seguridad'}}</label>
                                <select class="form-select mb-3" name="induccion_Seguridad_Bonanza"
                                    id="induccion_Seguridad_Bonanza">
                                    <option>Seleccione una opcion</option>
                                    <option id="induccion_Seguridad_Bonanza" value="Si">Si</option>
                                    <option id="induccion_Seguridad_Bonanza" value="No">No</option>
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="induccion_General_Limon"
                                                value="No">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="protocolo_Covid_Limon"
                                                value="No">
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
                                                name="prevencion_Incendios_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="prevencion_Incendios_Limon" value="No">
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
                                                name="respuesta_Emergencia_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="respuesta_Emergencia_Limon" value="No">
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
                                                name="sistema_Cinco_Puntos_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Cinco_Puntos_Limon" value="No">
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
                                                name="manipulacion_Manual_Carga_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manipulacion_Manual_Carga_Limon" value="No">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manejo_Residuos_Limon"
                                                value="No">
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
                                            <input class="form-check-input" type="radio" name="hiper_Limon" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hiper_Limon" value="No">
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
                                            <input class="form-check-input" type="radio" name="aps_Limon" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aps_Limon" value="No">
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
                                                name="primeros_Auxilios_Teorico_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Teorico_Limon" value="No">
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
                                                name="primeros_Auxilios_Practico_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Practico_Limon" value="No">
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
                                                name="manejo_Biodiversidad_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Biodiversidad_Limon" value="No">
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
                                                name="operacion_Equipos_Livianos_Teorico_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Teorico_Limon" value="No">
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
                                                name="operacion_Equipos_Livianos_Practico_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Practico_Limon" value="No">
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
                                                name="manejo_Hidrocarburo_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Hidrocarburo_Limon" value="No">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bloqueo_Etiquetado_Limon"
                                                value="No">
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
                                                name="sistema_Gestion_Social_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Gestion_Social_Limon" value="No">
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
                                                name="nuestro_Viaje_Seguridad_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="nuestro_Viaje_Seguridad_Limon" value="No">
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
                                                name="induccion_General_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="induccion_General_Libertad" value="No">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="protocolo_Covid_Libertad"
                                                value="No">
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
                                                name="prevencion_Incendios_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="prevencion_Incendios_Libertad" value="No">
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
                                                name="respuesta_Emergencia_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="respuesta_Emergencia_Libertad" value="No">
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
                                                name="sistema_Cinco_Puntos_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Cinco_Puntos_Libertad" value="No">
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
                                                name="manipulacion_Manual_Carga_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manipulacion_Manual_Carga_Libertad" value="No">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manejo_Residuos_Libertad"
                                                value="No">
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
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hiper_Libertad"
                                                value="No">
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
                                            <input class="form-check-input" type="radio" name="aps_Libertad" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aps_Libertad" value="No">
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
                                                name="primeros_Auxilios_Teorico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Teorico_Libertad" value="No">
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
                                                name="primeros_Auxilios_Practico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="primeros_Auxilios_Practico_Libertad" value="No">
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
                                                name="manejo_Biodiversidad_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Biodiversidad_Libertad" value="No">
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
                                                name="operacion_Equipos_Livianos_Teorico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Teorico_Libertad" value="No">
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
                                                name="operacion_Equipos_Livianos_Practico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="operacion_Equipos_Livianos_Practico_Libertad" value="No">
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
                                                name="manejo_Hidrocarburo_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="manejo_Hidrocarburo_Libertad" value="No">
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
                                                name="bloqueo_Etiquetado_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="bloqueo_Etiquetado_Libertad" value="No">
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
                                                name="sistema_Gestion_Social_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="sistema_Gestion_Social_Libertad" value="No">
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
                                                name="nuestro_Viaje_Seguridad_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="nuestro_Viaje_Seguridad_Libertad" value="No">
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
        <!--Realizar los demas formularios que hacen falta-->
        <!-- Agrega más elementos según sea necesario -->

    </div>
    <a href="/empleados" class="btn btn-danger mt-4 mb-2" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-4 mb-2" tabindex="4">Guardar</button>    
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