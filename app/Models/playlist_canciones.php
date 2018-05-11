<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class playlist_canciones extends Model
{
    protected $fillable = ['id','id_playlist','id_canciones'];
    protected $table = 'playlist_canciones';
    protected $connection = 'mysql';
}
