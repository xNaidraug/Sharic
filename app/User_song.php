<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class user_song extends Model
{
    protected $fillable = ['id','id_user','id_song'];
    protected $table = 'user_songs';
    protected $connection = 'mysql';
}
