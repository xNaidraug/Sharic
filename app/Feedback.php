<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $fillable = ['id','id_user'];
    protected $table = 'feedback';
    protected $connection = 'mysql';
}