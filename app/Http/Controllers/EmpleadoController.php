<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\User;
use App\Models\User as ModelsUser;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class EmpleadoController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Trae todos los registos del empleado
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados',$empleados);
    }

    /**
     * Función para exportar el Excel
     */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    // public function collection()
    // {
    //     return Excel::download(new EmpleadoExportsCollection,'empleadosInverza.xlsx');
    // }

    // public function view()
    // {
    //     return Excel::download(new EmpleadoExportsView,'empleadosInverza.xlsx');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('foto_Perfil')) {
        // Almacenar la imagen en la carpeta de almacenamiento público
        if ($request->hasFile('foto_Perfil')) {
            $file = $request->file('foto_Perfil');
            $nombrearchivo = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto_Perfils'), $nombrearchivo);
        }
        //
        $empleados = New Empleado();
        $empleados->foto_Perfil = $nombrearchivo;

        //Datos Generales del Empleado
        $empleados->numero_Cedula = $request->get('numero_Cedula');
        $empleados->nombres = $request->get('nombres');
        $empleados->apellidos = $request->get('apellidos');
        $empleados->celular = $request->get('celular');
        $empleados->municipio_Procedencia = $request->get('municipio_Procedencia');
        $empleados->ubicacion_Actual = $request->get('ubicacion_Actual');
        $empleados->direccion_Domiciliar = $request->get('direccion_Domiciliar');
        $empleados->nomina = $request->get('nomina');
        $empleados->tipo_Contrato = $request->get('tipo_Contrato');
        $empleados->estado = $request->get('estado');
        $empleados->inss = $request->get('inss');

        //Documentos del Empleado
        $empleados->doc_carnet_Bloqueo = $request->get('doc_carnet_Bloqueo');
        $empleados->doc_carnet_Inverza = $request->get('doc_carnet_Inverza');
        $empleados->doc_cedula = $request->get('doc_cedula');
        $empleados->f_doc_cedula = $request->get('f_doc_cedula');
        $empleados->doc_contrato = $request->get('doc_contrato');
        $empleados->doc_colilla_Inss = $request->get('doc_colilla_Inss');
        $empleados->f_doc_colilla_Inss = $request->get('f_doc_colilla_Inss');
        $empleados->doc_hoja_Ingreso = $request->get('doc_hoja_Ingreso');
        $empleados->doc_hoja_EPP = $request->get('doc_hoja_EPP');
        $empleados->f_doc_hoja_EPP = $request->get('f_doc_hoja_EPP');
        $empleados->doc_examen_General = $request->get('doc_examen_General');
        $empleados->doc_examen_Plomo = $request->get('doc_examen_Plomo');
        $empleados->doc_examen_Glucosa = $request->get('doc_examen_Glucosa');
        $empleados->doc_licencia_Conducir = $request->get('doc_licencia_Conducir');
        $empleados->f_doc_licencia_Conducir = $request->get('f_doc_licencia_Conducir');
        $empleados->doc_licencia_Soldador = $request->get('doc_licencia_Soldador');
        $empleados->f_doc_licencia_Soldador = $request->get('f_doc_licencia_Soldador');
        $empleados->doc_licencia_Electricidad = $request->get('doc_licencia_Electricidad');
        $empleados->f_doc_licencia_Electricidad = $request->get('f_doc_licencia_Electricidad');
        $empleados->doc_certificado_Salud = $request->get('doc_certificado_Salud');
        $empleados->doc_record_Policia = $request->get('doc_record_Policia');
        $empleados->f_doc_record_Policia = $request->get('f_doc_record_Policia');
        $empleados->doc_tarjeta_Covid = $request->get('doc_tarjeta_Covid');
        $empleados->doc_tarjeta_Tetano = $request->get('doc_tarjeta_Tetano');
        $empleados->enlace_Drive = $request->get('enlace_Drive');
        
        //Charla CEMEX
        $empleados->induccion_Cemex = $request->get('induccion_Cemex');
        $empleados->fecha_induccion_cemex = $request->get('fecha_induccion_cemex');

        //Charla Bonanza
        $empleados->induccion_Ambiente_Bonanza = $request->get('induccion_Ambiente_Bonanza');
        $empleados->fecha_induccion_Ambiente_Bonanza = $request->get('fecha_induccion_Ambiente_Bonanza');
        $empleados->induccion_Seguridad_Bonanza = $request->get('induccion_Seguridad_Bonanza');
        $empleados->fecha_induccion_Seguridad_Bonanza = $request->get('fecha_induccion_Seguridad_Bonanza');

        //Charla Limon
        $empleados->induccion_General_Limon = $request->get('induccion_General_Limon');
        $empleados->f_induccion_General_Limon = $request->get('f_induccion_General_Limon');
        $empleados->protocolo_Covid_Limon = $request->get('protocolo_Covid_Limon');
        $empleados->f_protocolo_Covid_Limon = $request->get('f_protocolo_Covid_Limon');
        $empleados->prevencion_Incendios_Limon = $request->get('prevencion_Incendios_Limon');
        $empleados->f_prevencion_Incendios_Limon = $request->get('f_prevencion_Incendios_Limon');
        $empleados->respuesta_Emergencia_Limon = $request->get('respuesta_Emergencia_Limon');
        $empleados->f_respuesta_Emergencia_Limon = $request->get('f_respuesta_Emergencia_Limon');
        $empleados->sistema_Cinco_Puntos_Limon = $request->get('sistema_Cinco_Puntos_Limon');
        $empleados->f_sistema_Cinco_Puntos_Limon = $request->get('f_sistema_Cinco_Puntos_Limon');
        $empleados->manipulacion_Manual_Carga_Limon = $request->get('manipulacion_Manual_Carga_Limon');
        $empleados->f_manipulacion_Manual_Carga_Limon = $request->get('f_manipulacion_Manual_Carga_Limon');
        $empleados->manejo_Residuos_Limon = $request->get('manejo_Residuos_Limon');
        $empleados->f_manejo_Residuos_Limon = $request->get('f_manejo_Residuos_Limon');
        $empleados->iper_Limon = $request->get('iper_Limon');
        $empleados->f_iper_Limon = $request->get('f_iper_Limon');
        $empleados->ats_Limon = $request->get('ats_Limon');
        $empleados->f_ats_Limon = $request->get('f_ats_Limon');
        $empleados->primeros_Auxilios_Teorico_Limon = $request->get('primeros_Auxilios_Teorico_Limon');
        $empleados->f_primeros_Auxilios_Teorico_Limon = $request->get('f_primeros_Auxilios_Teorico_Limon');
        $empleados->primeros_Auxilios_Practico_Limon = $request->get('primeros_Auxilios_Practico_Limon');
        $empleados->f_primeros_Auxilios_Practico_Limon = $request->get('f_primeros_Auxilios_Practico_Limon');
        $empleados->manejo_Biodiversidad_Limon = $request->get('manejo_Biodiversidad_Limon');
        $empleados->f_manejo_Biodiversidad_Limon = $request->get('f_manejo_Biodiversidad_Limon');
        $empleados->op_Equipos_Livianos_Teorico_Limon = $request->get('op_Equipos_Livianos_Teorico_Limon');
        $empleados->f_op_Equipos_Livianos_Teorico_Limon = $request->get('f_op_Equipos_Livianos_Teorico_Limon');
        $empleados->op_Equipos_Livianos_Practico_Limon = $request->get('op_Equipos_Livianos_Practico_Limon');
        $empleados->f_op_Equipos_Livianos_Practico_Limon = $request->get('f_op_Equipos_Livianos_Practico_Limon');
        $empleados->manejo_Hidrocarburo_Limon = $request->get('manejo_Hidrocarburo_Limon');
        $empleados->f_manejo_Hidrocarburo_Limon = $request->get('f_manejo_Hidrocarburo_Limon');
        $empleados->bloqueo_Etiquetado_Limon = $request->get('bloqueo_Etiquetado_Limon');
        $empleados->f_bloqueo_Etiquetado_Limon = $request->get('f_bloqueo_Etiquetado_Limon');
        $empleados->sistema_Gestion_Social_Limon = $request->get('sistema_Gestion_Social_Limon');
        $empleados->f_sistema_Gestion_Social_Limon = $request->get('f_sistema_Gestion_Social_Limon');
        $empleados->nuestro_Viaje_Seguridad_Limon = $request->get('nuestro_Viaje_Seguridad_Limon');
        $empleados->f_nuestro_Viaje_Seguridad_Limon = $request->get('f_nuestro_Viaje_Seguridad_Limon');

        //Charla Libertad
        $empleados->induccion_General_Libertad = $request->get('induccion_General_Libertad');
        $empleados->f_induccion_General_Libertad = $request->get('f_induccion_General_Libertad');
        $empleados->protocolo_Covid_Libertad = $request->get('protocolo_Covid_Libertad');
        $empleados->f_protocolo_Covid_Libertad = $request->get('f_protocolo_Covid_Libertad');
        $empleados->prevencion_Incendios_Libertad = $request->get('prevencion_Incendios_Libertad');
        $empleados->f_prevencion_Incendios_Libertad = $request->get('f_prevencion_Incendios_Libertad');
        $empleados->respuesta_Emergencia_Libertad = $request->get('respuesta_Emergencia_Libertad');
        $empleados->f_respuesta_Emergencia_Libertad = $request->get('f_respuesta_Emergencia_Libertad');
        $empleados->sistema_Cinco_Puntos_Libertad = $request->get('sistema_Cinco_Puntos_Libertad');
        $empleados->f_sistema_Cinco_Puntos_Libertad = $request->get('f_sistema_Cinco_Puntos_Libertad');
        $empleados->mani_Manual_Carga_Libertad = $request->get('mani_Manual_Carga_Libertad');
        $empleados->f_mani_Manual_Carga_Libertad = $request->get('f_mani_Manual_Carga_Libertad');
        $empleados->manejo_Residuos_Libertad = $request->get('manejo_Residuos_Libertad');
        $empleados->f_manejo_Residuos_Libertad = $request->get('f_manejo_Residuos_Libertad');
        $empleados->iper_Libertad = $request->get('iper_Libertad');
        $empleados->f_iper_Libertad = $request->get('f_iper_Libertad');
        $empleados->ats_Libertad = $request->get('ats_Libertad');
        $empleados->f_ats_Libertad = $request->get('f_ats_Libertad');
        $empleados->p_Aux_Teorico_Libertad = $request->get('p_Aux_Teorico_Libertad');
        $empleados->f_p_Aux_Teorico_Libertad = $request->get('f_p_Aux_Teorico_Libertad');
        $empleados->p_Aux_Practico_Libertad = $request->get('p_Aux_Practico_Libertad');
        $empleados->f_p_Aux_Practico_Libertad = $request->get('f_p_Aux_Practico_Libertad');
        $empleados->manejo_Biodiversidad_Libertad = $request->get('manejo_Biodiversidad_Libertad');
        $empleados->f_manejo_Biodiversidad_Libertad = $request->get('f_manejo_Biodiversidad_Libertad');
        $empleados->op_Eq_Livianos_Teorico_Libertad = $request->get('op_Eq_Livianos_Teorico_Libertad');
        $empleados->f_op_Eq_Livianos_Teorico_Libertad = $request->get('f_op_Eq_Livianos_Teorico_Libertad');
        $empleados->op_Eq_Livianos_Practico_Libertad = $request->get('op_Eq_Livianos_Practico_Libertad');
        $empleados->f_op_Eq_Livianos_Practico_Libertad = $request->get('f_op_Eq_Livianos_Practico_Libertad');
        $empleados->manejo_Hidrocarburo_Libertad = $request->get('manejo_Hidrocarburo_Libertad');
        $empleados->f_manejo_Hidrocarburo_Libertad = $request->get('f_manejo_Hidrocarburo_Libertad');
        $empleados->bloqueo_Etiquetado_Libertad = $request->get('bloqueo_Etiquetado_Libertad');
        $empleados->f_bloqueo_Etiquetado_Libertad = $request->get('f_bloqueo_Etiquetado_Libertad');
        $empleados->sistema_Gestion_Social_Libertad = $request->get('sistema_Gestion_Social_Libertad');
        $empleados->f_sistema_Gestion_Social_Libertad = $request->get('f_sistema_Gestion_Social_Libertad');
        $empleados->nuestro_Viaje_Seguridad_Libertad = $request->get('nuestro_Viaje_Seguridad_Libertad');
        $empleados->f_nuestro_Viaje_Seguridad_Libertad = $request->get('f_nuestro_Viaje_Seguridad_Libertad');

        $empleados->save();

        return redirect('/empleados')->with('success','Empleado registrado exitosamente');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empleado = Empleado::find($id);
        // dd($empleado);
        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::find($id);
        return view('empleado.edit')->with('empleado',$empleado);
        // return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $empleado = Empleado::find($id);

        // Verificar si se adjuntó un nuevo archivo de imagen
        if ($request->hasFile('foto_Perfil')) {
            // Eliminar la imagen anterior del servidor si existe
            if ($empleado->foto_Perfil) {
                // Eliminar la imagen anterior del servidor
                if (file_exists(public_path('foto_Perfils/' . $empleado->foto_Perfil))) {
                    unlink(public_path('foto_Perfils/' . $empleado->foto_Perfil));
                }
            }

            // Almacenar la nueva imagen en la carpeta de almacenamiento público
            $file = $request->file('foto_Perfil');
            $nombrearchivo = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto_Perfils'), $nombrearchivo);

            // Actualizar el nombre de la imagen en la base de datos
            $empleado->foto_Perfil = $nombrearchivo;

        }

        //Datos Generales del Empleado
        $empleado->numero_Cedula = $request->get('numero_Cedula');
        $empleado->nombres = $request->get('nombres');
        $empleado->apellidos = $request->get('apellidos');
        $empleado->celular = $request->get('celular');
        $empleado->municipio_Procedencia = $request->get('municipio_Procedencia');
        $empleado->ubicacion_Actual = $request->get('ubicacion_Actual');
        $empleado->direccion_Domiciliar = $request->get('direccion_Domiciliar');
        $empleado->nomina = $request->get('nomina');
        $empleado->tipo_Contrato = $request->get('tipo_Contrato');
        $empleado->estado = $request->get('estado');
        $empleado->inss = $request->get('inss');

        //Documentos del Empleado
        $empleado->doc_carnet_Bloqueo = $request->get('doc_carnet_Bloqueo');
        $empleado->doc_carnet_Inverza = $request->get('doc_carnet_Inverza');
        $empleado->doc_cedula = $request->get('doc_cedula');
        $empleado->f_doc_cedula = $request->get('f_doc_cedula');
        $empleado->doc_contrato = $request->get('doc_contrato');
        $empleado->doc_colilla_Inss = $request->get('doc_colilla_Inss');
        $empleado->f_doc_colilla_Inss = $request->get('f_doc_colilla_Inss');
        $empleado->doc_hoja_Ingreso = $request->get('doc_hoja_Ingreso');
        $empleado->doc_hoja_EPP = $request->get('doc_hoja_EPP');
        $empleado->f_doc_hoja_EPP = $request->get('f_doc_hoja_EPP');
        $empleado->doc_examen_General = $request->get('doc_examen_General');
        $empleado->doc_examen_Plomo = $request->get('doc_examen_Plomo');
        $empleado->doc_examen_Glucosa = $request->get('doc_examen_Glucosa');
        $empleado->doc_licencia_Conducir = $request->get('doc_licencia_Conducir');
        $empleado->f_doc_licencia_Conducir = $request->get('f_doc_licencia_Conducir');
        $empleado->doc_licencia_Soldador = $request->get('doc_licencia_Soldador');
        $empleado->f_doc_licencia_Soldador = $request->get('f_doc_licencia_Soldador');
        $empleado->doc_licencia_Electricidad = $request->get('doc_licencia_Electricidad');
        $empleado->f_doc_licencia_Electricidad = $request->get('f_doc_licencia_Electricidad');
        $empleado->doc_certificado_Salud = $request->get('doc_certificado_Salud');
        $empleado->doc_record_Policia = $request->get('doc_record_Policia');
        $empleado->f_doc_record_Policia = $request->get('f_doc_record_Policia');
        $empleado->doc_tarjeta_Covid = $request->get('doc_tarjeta_Covid');
        $empleado->doc_tarjeta_Tetano = $request->get('doc_tarjeta_Tetano');
        $empleado->enlace_Drive = $request->get('enlace_Drive');
        
        //Charla CEMEX
        $empleado->induccion_Cemex = $request->get('induccion_Cemex');
        $empleado->fecha_induccion_cemex = $request->get('fecha_induccion_cemex');

        //Charla Bonanza
        $empleado->induccion_Ambiente_Bonanza = $request->get('induccion_Ambiente_Bonanza');
        $empleado->fecha_induccion_Ambiente_Bonanza = $request->get('fecha_induccion_Ambiente_Bonanza');
        $empleado->induccion_Seguridad_Bonanza = $request->get('induccion_Seguridad_Bonanza');
        $empleado->fecha_induccion_Seguridad_Bonanza = $request->get('fecha_induccion_Seguridad_Bonanza');

        //Charla Limon
        $empleado->induccion_General_Limon = $request->get('induccion_General_Limon');
        $empleado->f_induccion_General_Limon = $request->get('f_induccion_General_Limon');
        $empleado->protocolo_Covid_Limon = $request->get('protocolo_Covid_Limon');
        $empleado->f_protocolo_Covid_Limon = $request->get('f_protocolo_Covid_Limon');
        $empleado->prevencion_Incendios_Limon = $request->get('prevencion_Incendios_Limon');
        $empleado->f_prevencion_Incendios_Limon = $request->get('f_prevencion_Incendios_Limon');
        $empleado->respuesta_Emergencia_Limon = $request->get('respuesta_Emergencia_Limon');
        $empleado->f_respuesta_Emergencia_Limon = $request->get('f_respuesta_Emergencia_Limon');
        $empleado->sistema_Cinco_Puntos_Limon = $request->get('sistema_Cinco_Puntos_Limon');
        $empleado->f_sistema_Cinco_Puntos_Limon = $request->get('f_sistema_Cinco_Puntos_Limon');
        $empleado->manipulacion_Manual_Carga_Limon = $request->get('manipulacion_Manual_Carga_Limon');
        $empleado->f_manipulacion_Manual_Carga_Limon = $request->get('f_manipulacion_Manual_Carga_Limon');
        $empleado->manejo_Residuos_Limon = $request->get('manejo_Residuos_Limon');
        $empleado->f_manejo_Residuos_Limon = $request->get('f_manejo_Residuos_Limon');
        $empleado->iper_Limon = $request->get('iper_Limon');
        $empleado->f_iper_Limon = $request->get('f_iper_Limon');
        $empleado->ats_Limon = $request->get('ats_Limon');
        $empleado->f_ats_Limon = $request->get('f_ats_Limon');
        $empleado->primeros_Auxilios_Teorico_Limon = $request->get('primeros_Auxilios_Teorico_Limon');
        $empleado->f_primeros_Auxilios_Teorico_Limon = $request->get('f_primeros_Auxilios_Teorico_Limon');
        $empleado->primeros_Auxilios_Practico_Limon = $request->get('primeros_Auxilios_Practico_Limon');
        $empleado->f_primeros_Auxilios_Practico_Limon = $request->get('f_primeros_Auxilios_Practico_Limon');
        $empleado->manejo_Biodiversidad_Limon = $request->get('manejo_Biodiversidad_Limon');
        $empleado->f_manejo_Biodiversidad_Limon = $request->get('f_manejo_Biodiversidad_Limon');
        $empleado->op_Equipos_Livianos_Teorico_Limon = $request->get('op_Equipos_Livianos_Teorico_Limon');
        $empleado->f_op_Equipos_Livianos_Teorico_Limon = $request->get('f_op_Equipos_Livianos_Teorico_Limon');
        $empleado->op_Equipos_Livianos_Practico_Limon = $request->get('op_Equipos_Livianos_Practico_Limon');
        $empleado->f_op_Equipos_Livianos_Practico_Limon = $request->get('f_op_Equipos_Livianos_Practico_Limon');
        $empleado->manejo_Hidrocarburo_Limon = $request->get('manejo_Hidrocarburo_Limon');
        $empleado->f_manejo_Hidrocarburo_Limon = $request->get('f_manejo_Hidrocarburo_Limon');
        $empleado->bloqueo_Etiquetado_Limon = $request->get('bloqueo_Etiquetado_Limon');
        $empleado->f_bloqueo_Etiquetado_Limon = $request->get('f_bloqueo_Etiquetado_Limon');
        $empleado->sistema_Gestion_Social_Limon = $request->get('sistema_Gestion_Social_Limon');
        $empleado->f_sistema_Gestion_Social_Limon = $request->get('f_sistema_Gestion_Social_Limon');
        $empleado->nuestro_Viaje_Seguridad_Limon = $request->get('nuestro_Viaje_Seguridad_Limon');
        $empleado->f_nuestro_Viaje_Seguridad_Limon = $request->get('f_nuestro_Viaje_Seguridad_Limon');

        //Charla Libertad
        $empleado->induccion_General_Libertad = $request->get('induccion_General_Libertad');
        $empleado->f_induccion_General_Libertad = $request->get('f_induccion_General_Libertad');
        $empleado->protocolo_Covid_Libertad = $request->get('protocolo_Covid_Libertad');
        $empleado->f_protocolo_Covid_Libertad = $request->get('f_protocolo_Covid_Libertad');
        $empleado->prevencion_Incendios_Libertad = $request->get('prevencion_Incendios_Libertad');
        $empleado->f_prevencion_Incendios_Libertad = $request->get('f_prevencion_Incendios_Libertad');
        $empleado->respuesta_Emergencia_Libertad = $request->get('respuesta_Emergencia_Libertad');
        $empleado->f_respuesta_Emergencia_Libertad = $request->get('f_respuesta_Emergencia_Libertad');
        $empleado->sistema_Cinco_Puntos_Libertad = $request->get('sistema_Cinco_Puntos_Libertad');
        $empleado->f_sistema_Cinco_Puntos_Libertad = $request->get('f_sistema_Cinco_Puntos_Libertad');
        $empleado->mani_Manual_Carga_Libertad = $request->get('mani_Manual_Carga_Libertad');
        $empleado->f_mani_Manual_Carga_Libertad = $request->get('f_mani_Manual_Carga_Libertad');
        $empleado->manejo_Residuos_Libertad = $request->get('manejo_Residuos_Libertad');
        $empleado->f_manejo_Residuos_Libertad = $request->get('f_manejo_Residuos_Libertad');
        $empleado->iper_Libertad = $request->get('iper_Libertad');
        $empleado->f_iper_Libertad = $request->get('f_iper_Libertad');
        $empleado->ats_Libertad = $request->get('ats_Libertad');
        $empleado->f_ats_Libertad = $request->get('f_ats_Libertad');
        $empleado->p_Aux_Teorico_Libertad = $request->get('p_Aux_Teorico_Libertad');
        $empleado->f_p_Aux_Teorico_Libertad = $request->get('f_p_Aux_Teorico_Libertad');
        $empleado->p_Aux_Practico_Libertad = $request->get('p_Aux_Practico_Libertad');
        $empleado->f_p_Aux_Practico_Libertad = $request->get('f_p_Aux_Practico_Libertad');
        $empleado->manejo_Biodiversidad_Libertad = $request->get('manejo_Biodiversidad_Libertad');
        $empleado->f_manejo_Biodiversidad_Libertad = $request->get('f_manejo_Biodiversidad_Libertad');
        $empleado->op_Eq_Livianos_Teorico_Libertad = $request->get('op_Eq_Livianos_Teorico_Libertad');
        $empleado->f_op_Eq_Livianos_Teorico_Libertad = $request->get('f_op_Eq_Livianos_Teorico_Libertad');
        $empleado->op_Eq_Livianos_Practico_Libertad = $request->get('op_Eq_Livianos_Practico_Libertad');
        $empleado->f_op_Eq_Livianos_Practico_Libertad = $request->get('f_op_Eq_Livianos_Practico_Libertad');
        $empleado->manejo_Hidrocarburo_Libertad = $request->get('manejo_Hidrocarburo_Libertad');
        $empleado->f_manejo_Hidrocarburo_Libertad = $request->get('f_manejo_Hidrocarburo_Libertad');
        $empleado->bloqueo_Etiquetado_Libertad = $request->get('bloqueo_Etiquetado_Libertad');
        $empleado->f_bloqueo_Etiquetado_Libertad = $request->get('f_bloqueo_Etiquetado_Libertad');
        $empleado->sistema_Gestion_Social_Libertad = $request->get('sistema_Gestion_Social_Libertad');
        $empleado->f_sistema_Gestion_Social_Libertad = $request->get('f_sistema_Gestion_Social_Libertad');
        $empleado->nuestro_Viaje_Seguridad_Libertad = $request->get('nuestro_Viaje_Seguridad_Libertad');
        $empleado->f_nuestro_Viaje_Seguridad_Libertad = $request->get('f_nuestro_Viaje_Seguridad_Libertad');

        $empleado->save();

        return redirect('/empleados');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);

        $empleado->delete();

        // Elimina el archivo de imagen si existe
        if ($empleado->foto_Perfil) {
            $path = public_path('foto_Perfils/' . $empleado->foto_Perfil);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        
        return redirect('/empleados')->with('success', 'Empleado eliminado exitosamente.');
    }
}
