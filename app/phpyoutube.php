<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phpyoutube extends Model
{
    protected $table = 'phpyoutube';

    protected $fillable = ['author','title','source','destination'];

    protected $dates = ['created_at', 'updated_at'];
}
