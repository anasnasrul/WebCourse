<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class htmlsololearn extends Model
{
     protected $table = 'htmlsololearn';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
