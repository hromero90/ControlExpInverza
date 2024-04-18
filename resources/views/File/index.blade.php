@extends('adminlte::page')

@section('title', 'ControlExpInverza')

@section('content_header')
    <h1 class="font-monospace">Capacitaciones</h1>
@stop

@section('content')
<div class="accordion" id="accordionExample">
    <!--Capacitaciones TRITON-->
    <div class="accordion-item mb-2">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="false" aria-controls="collapseOne">
                Capacitaciones TRITON
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <!--Cuerpo del Acordion-->
                <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Cianuro I</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="https://drive.google.com/drive/folders/1E6fslgjmGqNkAA8WgKK21N0nvw65xtz8?usp=drive_link" class="btn btn-primary">Resultados</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Respuesta ante emergencias</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="https://drive.google.com/drive/folders/1wjF93lUmOzzddQAvbR-kR6-GxCLoLY7Q?usp=drive_link" class="btn btn-primary">Resultados</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Sistema 5 Puntos</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="https://drive.google.com/drive/folders/1bDg7M4Bvm6Rm-CNBr7FaBXXOC1o6ZEwC?usp=sharing" class="btn btn-primary">Resultados</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Sistema Gestion Social</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="https://drive.google.com/drive/folders/1JMkRieVbxI7b9AKeUbMkXV7ZuAj_qEGe?usp=sharing" class="btn btn-primary">Resultados</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Capacitaciones CALIBRE-->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                Capacitacion CALIBRE
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <!--Cuerpo del Acordion 2-->
              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


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