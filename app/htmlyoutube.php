<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class htmlyoutube extends Model
{
    protected $table = 'htmlyoutube';

    protected $fillable = ['author','title','source','destination'];

    protected $dates = ['created_at', 'updated_at'];
}
