<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jsyoutube extends Model
{
    protected $table = 'jsyoutube';

    protected $fillable = ['author','title','source','destination'];

    protected $dates = ['created_at', 'updated_at'];
}
