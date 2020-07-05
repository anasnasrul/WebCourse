<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class netudemy extends Model
{
    protected $table = 'netudemy';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
