<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario_canciones extends Model
{
    protected $fillable = ['id','id_users','id_canciones'];
    protected $table = 'usuario_canciones';
    protected $connection = 'mysql';
}
