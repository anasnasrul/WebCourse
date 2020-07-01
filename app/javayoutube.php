<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class javayoutube extends Model
{
    protected $table = 'javayoutube';

    protected $fillable = ['author','title','source','destination'];

    protected $dates = ['created_at', 'updated_at'];
}
