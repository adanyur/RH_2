<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class EncuestaDetalle extends Model{


    protected $primaryKey = 'encuestaid';
    protected $table = "encuesta_detalle";
    protected $fillable = ['encuestaid','pregunta', 'respuesta'];
    const UPDATED_AT = null;
    const CREATED_AT = null;

}