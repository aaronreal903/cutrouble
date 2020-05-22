<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfc extends Model
{
    protected $fillable = [
        'numero_rfc', 'iniciacion','motivo_cambio','descripcion_cambio', 'atributos','analisis_riesgo',
        'prioridad', 'fecha_implementacion','recomendacion','implementacion_prolongada', 'implementacion_cambio',
        'resultados_cambio','resultados_pruebas', 'autorizado','fecha_aprobacion','revision_post_implementacion'
    ];

     public function scopesearchnumerorfc($query,$categoria){
        return $query->where('numero_rfc','LIKE',"%$categoria%")->get();
    }
}
