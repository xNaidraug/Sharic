<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    protected $fillable = ['id','title','url'];
    protected $table = 'songs';
    protected $connection = 'mysql';
}