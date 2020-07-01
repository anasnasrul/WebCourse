<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cssyoutube extends Model
{
    protected $table = 'cssyoutube';

    protected $fillable = ['author','title','source','destination'];

    protected $dates = ['created_at', 'updated_at'];
}
