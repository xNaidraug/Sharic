<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    protected $fillable = ['id','id_users'];
    protected $table = 'playlist';
    protected $connection = 'mysql';
}
