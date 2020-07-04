<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class javaudemy_content extends Model
{
    protected $table = 'javaudemy_content';

    protected $fillable = ['Content_Title','Content_Subtitle','Content_Home1',
    'Content_Home2','Content_Home3','Content_Home4','Content_Home5','Content_Home6',
    'Content_Home7','Content_Home8','Content_Home9','Content_Home10','Content_Picture1',
    'Content_Picture2','Content_Picture3','Content_Picture4','Content_Picture5','Content_Picture6',
    'Content_Picture7','Content_Picture8','Content_Picture9','Content_Picture10''];

    protected $dates = ['created_at', 'updated_at'];
}
