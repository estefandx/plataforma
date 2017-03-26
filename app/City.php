<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'Ciudad';
    protected $primaryKey = "ciudad_id";
    public     $timestamps = false;
}
