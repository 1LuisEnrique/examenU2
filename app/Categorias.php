<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //

    protected $table = 'categorias_preguntas';
    protected $primaryKey='id_catpreg';
    protected $fillable = ['nom_cat'];

}
