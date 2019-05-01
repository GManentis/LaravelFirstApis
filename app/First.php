<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class First extends Model
{
    protected $table = 'firstapi';
    protected $fillable = ['name','title','descr'];
}
