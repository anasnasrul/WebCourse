<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jqueryyoutube extends Model
{
    protected $table = 'jqueryyoutube';

    protected $fillable = ['author','title','source','destination'];

    protected $dates = ['created_at', 'updated_at'];
}
