<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_rfc')->nullable();
            $table->string('iniciacion')->nullable();
            $table->string('motivo_cambio')->nullable();
            $table->string('descripcion_cambio')->nullable();
            $table->string('atributos')->nullable();
            $table->string('analisis_riesgo')->nullable();
            $table->string('prioridad')->nullable();
            $table->string('fecha_implementacion')->nullable();
            $table->string('recomendacion')->nullable();
            $table->string('implementacion_prolongada')->nullable();
            $table->string('implementacion_cambio')->nullable();
            $table->string('resultados_cambio')->nullable();
            $table->string('resultados_pruebas')->nullable();
            $table->string('autorizado')->nullable();
            $table->string('fecha_aprobacion')->nullable();
            $table->string('revision_post_implementacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rfcs');
    }
}
