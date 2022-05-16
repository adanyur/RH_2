<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Encuesta extends Model{

    protected $table = "encuesta";
    protected $fillable = ['formulario','nombres','apellidos','email','fecha'];
    const UPDATED_AT = null;
    const CREATED_AT = null;

}