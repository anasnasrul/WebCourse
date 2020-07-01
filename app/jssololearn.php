<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jssololearn extends Model
{
    protected $table = 'jssololearn';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
