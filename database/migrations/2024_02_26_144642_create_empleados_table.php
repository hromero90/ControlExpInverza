<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Datos Generales
            $table->string('numero_Cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('celular');
            $table->string('municipio_Procedencia');
            $table->string('ubicacion_Actual');
            $table->string('direccion_Domiciliar');
            $table->string('nomina');
            $table->string('tipo_Contrato');
            $table->string('foto_Perfil')->nullable();
            $table->string('estado');
            $table->string('inss');
            //Documentaciones
            $table->string('doc_carnet_Bloqueo');
            $table->string('doc_carnet_Inverza');
            $table->string('doc_cedula');
            $table->string('doc_contrato');
            $table->string('doc_colilla_Inss');
            $table->string('doc_hoja_Ingreso');
            $table->string('doc_hoja_EPP');
            $table->string('doc_examen_General');
            $table->string('doc_examen_Plomo');
            $table->string('doc_examen_Glucosa');
            $table->string('doc_licencia_Conducir');
            $table->string('doc_licencia_Soldador');
            $table->string('doc_licencia_Electricidad');
            $table->string('doc_certificado_Salud');
            $table->string('doc_record_Policia');
            $table->string('doc_tarjeta_Covid');
            $table->string('doc_tarjeta_Tetano');
            $table->string('enlace_Drive');
            //Charlas CEMEX - Clever
            $table->string('induccion_Cemex');
            $table->date('fecha_induccion_cemex');
            //Charlas Bonanza - Henco
            $table->string('induccion_Ambiente_Bonanza');
            $table->date('fecha_induccion_Ambiente_Bonanza');
            $table->string('induccion_Seguridad_Bonanza');
            $table->date('fecha_induccion_Seguridad_Bonanza');
            //Charlas Limón - Triton
            $table->string('induccion_General_Limon');
            $table->date('f_induccion_General_Limon');
            $table->string('protocolo_Covid_Limon');
            $table->date('f_protocolo_Covid_Limon');
            $table->string('prevencion_Incendios_Limon');
            $table->date('f_prevencion_Incendios_Limon');
            $table->string('respuesta_Emergencia_Limon');
            $table->date('f_respuesta_Emergencia_Limon');
            $table->string('sistema_Cinco_Puntos_Limon');
            $table->date('f_sistema_Cinco_Puntos_Limon');
            $table->string('manipulacion_Manual_Carga_Limon');
            $table->date('f_manipulacion_Manual_Carga_Limon');
            $table->string('manejo_Residuos_Limon');
            $table->date('f_manejo_Residuos_Limon');
            $table->string('iper_Limon');
            $table->date('f_iper_Limon');
            $table->string('ats_Limon');
            $table->date('f_ats_Limon');
            $table->string('primeros_Auxilios_Teorico_Limon');
            $table->date('f_primeros_Auxilios_Teorico_Limon');
            $table->string('primeros_Auxilios_Practico_Limon');
            $table->date('f_primeros_Auxilios_Practico_Limon');
            $table->string('manejo_Biodiversidad_Limon');
            $table->date('f_manejo_Biodiversidad_Limon');
            $table->string('op_Equipos_Livianos_Teorico_Limon');
            $table->date('f_op_Equipos_Livianos_Teorico_Limon');
            $table->string('op_Equipos_Livianos_Practico_Limon');
            $table->date('f_op_Equipos_Livianos_Practico_Limon');
            $table->string('manejo_Hidrocarburo_Limon');
            $table->date('f_manejo_Hidrocarburo_Limon');
            $table->string('bloqueo_Etiquetado_Limon');
            $table->date('f_bloqueo_Etiquetado_Limon');
            $table->string('sistema_Gestion_Social_Limon');
            $table->date('f_sistema_Gestion_Social_Limon');
            $table->string('nuestro_Viaje_Seguridad_Limon');
            $table->date('f_nuestro_Viaje_Seguridad_Limon');
            //Charlas Libertad - Desminic
            $table->string('induccion_General_Libertad');
            $table->date('f_induccion_General_Libertad');
            $table->string('protocolo_Covid_Libertad');
            $table->date('f_protocolo_Covid_Libertad');
            $table->string('prevencion_Incendios_Libertad');
            $table->date('f_prevencion_Incendios_Libertad');
            $table->string('respuesta_Emergencia_Libertad');
            $table->date('f_respuesta_Emergencia_Libertad');
            $table->string('sistema_Cinco_Puntos_Libertad');
            $table->date('f_sistema_Cinco_Puntos_Libertad');
            $table->string('mani_Manual_Carga_Libertad');
            $table->date('f_mani_Manual_Carga_Libertad');
            $table->string('manejo_Residuos_Libertad');
            $table->date('f_manejo_Residuos_Libertad');
            $table->string('iper_Libertad');
            $table->date('f_iper_Libertad');
            $table->string('ats_Libertad');
            $table->date('f_ats_Libertad');
            $table->string('p_Aux_Teorico_Libertad');
            $table->date('f_p_Aux_Teorico_Libertad');
            $table->string('p_Aux_Practico_Libertad');
            $table->date('f_p_Aux_Practico_Libertad');
            $table->string('manejo_Biodiversidad_Libertad');
            $table->date('f_manejo_Biodiversidad_Libertad');
            $table->string('op_Eq_Livianos_Teorico_Libertad');
            $table->date('f_op_Eq_Livianos_Teorico_Libertad');
            $table->string('op_Eq_Livianos_Practico_Libertad');
            $table->date('f_op_Eq_Livianos_Practico_Libertad');
            $table->string('manejo_Hidrocarburo_Libertad');
            $table->date('f_manejo_Hidrocarburo_Libertad');
            $table->string('bloqueo_Etiquetado_Libertad');
            $table->date('f_bloqueo_Etiquetado_Libertad');
            $table->string('sistema_Gestion_Social_Libertad');
            $table->date('f_sistema_Gestion_Social_Libertad');
            $table->string('nuestro_Viaje_Seguridad_Libertad');
            $table->date('f_nuestro_Viaje_Seguridad_Libertad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
