<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sqlsololearn extends Model
{
    protected $table = 'sqlsololearn';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}