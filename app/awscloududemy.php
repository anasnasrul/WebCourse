<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class awscloududemy extends Model
{
    protected $table = 'awscloududemy';

    protected $fillable = ['author','title','subtitle','source','content'];

    protected $dates = ['created_at', 'updated_at'];
}
