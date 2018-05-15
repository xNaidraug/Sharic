<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    protected $fillable = ['id','id_user'];
    protected $table = 'playlists';
    protected $connection = 'mysql';
}
