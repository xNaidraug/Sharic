<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class playlist_song extends Model
{
    protected $fillable = ['id','id_playlist','id_song'];
    protected $table = 'playlist_songs';
    protected $connection = 'mysql';
}
