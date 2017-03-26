<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $table = 'Departamento';
    protected $primaryKey = "departamento_id";
    public     $timestamps = false;
}
