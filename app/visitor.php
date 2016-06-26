<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    //
    protected $table = 'visitor';
    protected $fillable = ['name','phone','email','occupation'];
}
