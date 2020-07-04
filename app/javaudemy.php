<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class javaudemy extends Model
{
    protected $table = 'javaudemy';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
