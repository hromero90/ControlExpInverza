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
                                                "1- Gerencia y Administracion",
                                                "2- Construccion",
                                                "3- Transporte",
                                                "4- Mecanica Automotriz",
                                                "5- Mecanica Industrial",
                                                "6- Ayudantes",
                                                "7- Estibadores",
                                                "8- Seguridad Fisica",
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
                                <label for="c_safe" class="form-label">C-Safe</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="c_safe" value="Activo"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Activo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="c_safe" value="Inactivo">
                                            <label class="form-check-label" for="gridRadios2">
                                                Inactivo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row align-items-end">
                            <!--INSS-->
                            <div class="col">
                                <div class="col">
                                    <label for="inss">{{'INSS'}}</label>
                                    <input type="text" class="form-control mb-3" name="inss" id="inss">
                                </div>
                            </div>
                            <div class="col">
                                
                            </div>
                            <div class="col">
                              
                            </div>
                            <div class="col">
                                
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_doc_cedula">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <!--Manejar con fechas el incio y el final del contrato-->
                            <div class="col">
                                <label for="doc_contrato" class="form-label mt-3">Contrato</label>
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
                                <label for="doc_colilla_Inss" class="form-label mt-3">Colilla del INSS</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_doc_colilla_Inss">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_hoja_Ingreso" class="form-label mt-3">Hoja de Ingreso</label>
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
                                <label for="doc_hoja_EPP" class="form-label mt-3">Hoja EPP</label>
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
                                         <!--Fecha que se recibio la capacitacion-->
                                         <input class="col-sm-6" type="date" class="form-control" name="f_doc_hoja_EPP">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_examen_General" class="form-label mt-3">Examen General</label>
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
                                <label for="doc_examen_Plomo" class="form-label mt-3">Examen de Plomo</label>
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
                                <label for="doc_examen_Glucosa" class="form-label mt-3">Examen de Glucosa</label>
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
                                <label for="doc_licencia_Conducir" class="form-label mt-3">Licencia de Conducir</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_doc_licencia_Conducir">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col">
                                <label for="doc_licencia_Soldador" class="form-label mt-3">Licencia de Soldador</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_doc_licencia_Soldador">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="doc_licencia_Electricidad" class="form-label mt-3">Licencia de
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_doc_licencia_Electricidad">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                <label for="doc_certificado_Salud" class="form-label mt-3">Certificado de Salud</label>
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
                                <label for="doc_record_Policia" class="form-label mt-3">Record de Policia</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_doc_record_Policia">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="doc_tarjeta_Covid" class="form-label mt-3">Tarjeta de COVID</label>
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
                                <label for="doc_tarjeta_Tetano" class="form-label mt-3">Tarjeta de Tetano</label>
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
        <!--Capacitacion CEMEX-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    Capacitacion CEMEX
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-2" type="date" class="form-control" name="fecha_induccion_cemex">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Capacitaciones Bonanza-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour">
                    Capacitaciones Bonanza
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-4" type="date" class="form-control" name="fecha_induccion_Ambiente_Bonanza">
                                    </div>
                                </div>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-4" type="date" class="form-control" name="fecha_induccion_Seguridad_Bonanza">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Capacitaciones Triton-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive">
                    Capacitaciones Triton
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_induccion_General_Limon">
                                    </div>
                                </div>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_protocolo_Covid_Limon">
                                    </div>
                                </div>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_prevencion_Incendios_Limon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="respuesta_Emergencia_Limon" class="form-label mt-3">Respuesta ante
                                    Emergencias</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_respuesta_Emergencia_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="sistema_Cinco_Puntos_Limon" class="form-label mt-3">Sistema Cinco Puntos</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_sistema_Cinco_Puntos_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="manipulacion_Manual_Carga_Limon" class="form-label mt-3">Manipulacion
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_manipulacion_Manual_Carga_Limon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="manejo_Residuos_Limon" class="form-label mt-3">Manejo de Residuos</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_manejo_Residuos_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="iper_Limon" class="form-label mt-3">IPER</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="iper_Limon" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="iper_Limon" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_iper_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="ats_Limon" class="form-label mt-3">ATS</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ats_Limon" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ats_Limon" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_ats_Limon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="primeros_Auxilios_Teorico_Limon" class="form-label mt-3">Primeros Auxilios
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_primeros_Auxilios_Teorico_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="primeros_Auxilios_Practico_Limon" class="form-label mt-3">Primeros Auxilios
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_primeros_Auxilios_Practico_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="manejo_Biodiversidad_Limon" class="form-label mt-3">Manejo de la
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_manejo_Biodiversidad_Limon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="op_Equipos_Livianos_Teorico_Limon" class="form-label mt-3">Operación de
                                    Equipos Livianos Teorico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Equipos_Livianos_Teorico_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Equipos_Livianos_Teorico_Limon" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_op_Equipos_Livianos_Teorico_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="op_Equipos_Livianos_Practico_Limon" class="form-label mt-3">Operación de
                                    Equipos Livianos Practico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Equipos_Livianos_Practico_Limon" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Equipos_Livianos_Practico_Limon" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_op_Equipos_Livianos_Practico_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="manejo_Hidrocarburo_Limon" class="form-label mt-3">Manejo de
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_manejo_Hidrocarburo_Limon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="bloqueo_Etiquetado_Limon" class="form-label mt-3">Bloqueo y Etiquetado</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_bloqueo_Etiquetado_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="sistema_Gestion_Social_Limon" class="form-label mt-3">Sistema de Gestión
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_sistema_Gestion_Social_Limon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="nuestro_Viaje_Seguridad_Limon" class="form-label mt-3">Nuestro Viaje
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_nuestro_Viaje_Seguridad_Limon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Capacitaciones DESMINIC-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                    aria-expanded="false" aria-controls="collapseSix">
                    Capacitaciones Desminic
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_induccion_General_Libertad">
                                    </div>
                                </div>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_protocolo_Covid_Libertad">
                                    </div>
                                </div>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_prevencion_Incendios_Libertad">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="respuesta_Emergencia_Libertad" class="form-label mt-3">Respuesta ante
                                    Emergencias</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_respuesta_Emergencia_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="sistema_Cinco_Puntos_Libertad" class="form-label mt-3">Sistema Cinco
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_sistema_Cinco_Puntos_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="mani_Manual_Carga_Libertad" class="form-label mt-3">Manipulacion
                                    Manual de Carga</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="mani_Manual_Carga_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="mani_Manual_Carga_Libertad" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_mani_Manual_Carga_Libertad">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="manejo_Residuos_Libertad" class="form-label mt-3">Manejo de Residuos</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_manejo_Residuos_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="iper_Libertad" class="form-label mt-3">IPER</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="iper_Libertad"
                                                value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="iper_Libertad"
                                                value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_iper_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="ats_Libertad" class="form-label mt-3">ATS</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ats_Libertad" value="Si"
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ats_Libertad" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_ats_Libertad">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="p_Aux_Teorico_Libertad" class="form-label mt-3">Primeros Auxilios
                                    Teorico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="p_Aux_Teorico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="p_Aux_Teorico_Libertad" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_p_Aux_Teorico_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="p_Aux_Practico_Libertad" class="form-label mt-3">Primeros Auxilios
                                    Practico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="p_Aux_Practico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="p_Aux_Practico_Libertad" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_p_Aux_Practico_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="manejo_Biodiversidad_Libertad" class="form-label mt-3">Manejo de la
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_manejo_Biodiversidad_Libertad">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="op_Eq_Livianos_Teorico_Libertad" class="form-label mt-3">Operación de
                                    Equipos Livianos Teorico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Eq_Livianos_Teorico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Eq_Livianos_Teorico_Libertad" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_op_Eq_Livianos_Teorico_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="op_Eq_Livianos_Practico_Libertad" class="form-label mt-3">Operación
                                    de Equipos Livianos Practico</label>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Eq_Livianos_Practico_Libertad" value="Si">
                                            <label class="form-check-label" for="gridRadios1">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="op_Eq_Livianos_Practico_Libertad" value="No">
                                            <label class="form-check-label" for="gridRadios2">
                                                No
                                            </label>
                                        </div>
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_op_Eq_Livianos_Practico_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="manejo_Hidrocarburo_Libertad" class="form-label mt-3">Manejo de
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_manejo_Hidrocarburo_Libertad">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <label for="bloqueo_Etiquetado_Libertad" class="form-label mt-3">Bloqueo y Etiquetado</label>
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_bloqueo_Etiquetado_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="sistema_Gestion_Social_Libertad" class="form-label mt-3">Sistema de Gestión
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_sistema_Gestion_Social_Libertad">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="nuestro_Viaje_Seguridad_Libertad" class="form-label mt-3">Nuestro Viaje
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
                                        <!--Fecha que se recibio la capacitacion-->
                                        <input class="col-sm-6" type="date" class="form-control" name="f_nuestro_Viaje_Seguridad_Libertad">
                                    </div>
                                </div>
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