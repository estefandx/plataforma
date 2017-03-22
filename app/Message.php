<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'Mensaje';
    protected $primaryKey = "mensaje_id";
}
