<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listWork extends Model
{
    protected $fillable = [
        'check','title','content','date','star','group'
    ];
}
