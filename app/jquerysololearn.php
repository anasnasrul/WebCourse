<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jquerysololearn extends Model
{
     protected $table = 'jquerysololearn';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
