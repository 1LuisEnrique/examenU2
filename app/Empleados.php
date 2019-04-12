<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //

    protected $table = 'empleados';
    protected $primaryKey='id_empleado';
    protected $fillable = ['nombre','nombre','ap','direccion','codpost','telefono','empresa'];
}
