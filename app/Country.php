<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'Pais';
    protected $primaryKey = "pais_id";
    public     $timestamps = false;
}
