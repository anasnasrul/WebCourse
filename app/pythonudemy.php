<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pythonudemy extends Model
{
    protected $table = 'pythonudemy';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
