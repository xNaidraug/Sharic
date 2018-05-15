<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class follower extends Model
{
    protected $fillable = ['id','id_user','id_follow'];
    protected $table = 'followers';
    protected $connection = 'mysql';
}