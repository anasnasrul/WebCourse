<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jquerysololearn_content extends Model
{
    protected $table = 'jquerysololearn_content';

    protected $fillable = ['Content_Title','Content_Subtitle','Content_Home1','Content_Home2',
    'Content_Home3','Content_Home4','Content_Home5','Content_Code1',
    'Content_Code2','Content_Code3','Content_Code4','Content_Code5','Content_Picture1',
    'Content_Picture2','Content_Picture3','Content_Picture4','Content_Picture5',
    'Content_Note1','Content_Note2','Content_Note3','Content_Note4','Content_Note5',];

    protected $dates = ['created_at', 'updated_at'];
}
