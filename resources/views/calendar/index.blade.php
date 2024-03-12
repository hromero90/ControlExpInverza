@extends('adminlte::page')
@section('title', 'Calendario Documentos Pendientes')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Calendario Documentos Pendientes</title> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- En la sección head de tu archivo Blade principal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>

    <!--SweetAlert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="empleadoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Documento Pendiente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--Campos donde se va a introducir la información-->
                <div class="modal-body">
                    <input type="text" class="form-control" name="" id="title">
                    <span id="titleError" class="text-danger"></span>
                </div>
                <!--Botones del formulario-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" id="saveBtn" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-3">Calendario de Documentos Pendientes</h3>
                <div class="col-md-11 offset-1 mt-3 mb-5">
                    <div id="calendar">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() 
        {

            $.ajaxSetup(
            {
                headers: 
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var empl_pendientes = @json($exp_pendiente);
            // console.log(docs_pendientes);
            $('#calendar').fullCalendar(
            {
                header: 
                {
                    left: 'prev, next, today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay'
                },
                events: empl_pendientes,
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDays) {
                    $('#empleadoModal').modal('toggle');

                    $('#saveBtn').click(function() {
                        var title = $('#title').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');

                        $.ajax({
                            url: "{{ route('calendar.store') }}",
                            type: "POST",
                            dataType: 'json',
                            data: {title, start_date, end_date},
                            success: function(response) 
                            {
                                swal("¡Operación exitosa!", "La información ha sido agregada correctamente.", "success")
                                .then((value) => 
                            {
                                // Recargar la página después de que el usuario presione OK
                                location.reload();
                             });
                                // swal("Good job!", "Event Updated!", "success");
                                $('#empleadoModal').modal('hide')
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.title,
                                    'start': response.start_date,
                                    'end': response.end_date
                                });
                            },
                            error: function(error) 
                            {
                                if (error.responseJSON.errors) 
                                {
                                    $('#titleError').html(error.responseJSON.errors.title);
                                }
                            },
                        });
                    });
                },
                editable: true,
                eventDrop: function(event) 
                {
                    var id = event.id;
                    var start_date = moment(event.start).format('YYYY-MM-DD');
                    var end_date = moment(event.end).format('YYYY-MM-DD');

                    $.ajax(
                    {
                        url: "{{ route('calendar.update', '') }}" + '/' + id,
                        type: "PATCH",
                        dataType: 'json',
                        data: { start_date, end_date },
                        success: function(response) 
                        {
                            // swal("Good job!", "Event Updated!", "success");
                            swal("¡Operación exitosa!", "La información ha sido actualizada correctamente.", "success")
                                .then((value) => 
                            {
                                // Recargar la página después de que el usuario presione OK
                                location.reload();
                             });
                        },
                        error: function(error) {
                            // console.log(error);
                        },
                    });
                },
                eventClick: function(event)
                {
                    var id = event.id;

                    if (confirm('Desea eliminar este evento?')) {
                        $.ajax(
                    {
                        url: "{{ route('calendar.destroy', '') }}" + '/' + id,
                        type: "DELETE",
                        dataType: 'json',
                        success: function(response) 
                        {
                            $('#calendar').fullCalendar('removeEvents', response)
                            swal("¡Operación exitosa!", "La información ha sido eliminada correctamente.", "success")
                            .then((value) => 
                            {
                                // Recargar la página después de que el usuario presione OK
                                location.reload();
                             });
                        },
                        error: function(error) 
                        {
                            console.log(error);
                        },
                    });
                    }
                },
                selectAllow: function(event)
                {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
                }
            });

            $("#empleadoModal").on("hidden.bs.modal", function()
            {
                $('#saveBtn').unbind();
            });

            // $('.fc-event').css('font-size', '18px');
            // $('.fc-event').css('')
            // $('.fc').css('backgroud-color', '#EEEEEE')
        });

        
    </script>
</body>


</html>
