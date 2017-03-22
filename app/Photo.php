<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'Foto';
    protected $primaryKey = "foto_id";
    public     $timestamps = false;
}
