<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pythonsololearn extends Model
{
    protected $table = 'pythonsololearn';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
