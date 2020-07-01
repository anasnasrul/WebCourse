<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phpsololearn extends Model
{
    protected $table = 'phpsololearn';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
