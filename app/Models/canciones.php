<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class canciones extends Model
{
    protected $fillable = ['id','title','url'];
    protected $table = 'canciones';
    protected $connection = 'mysql';
}