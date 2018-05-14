<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class followers extends Model
{
    protected $fillable = ['id','id_users','id_follow'];
    protected $table = 'followers';
    protected $connection = 'mysql';
}