<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\cssyoutube;

class CSSController extends Controller
{
    public function index(){    

    	$cssyoutube = DB::table('cssyoutube')->paginate(4);
    	$cssyoutube1 = DB::table('cssyoutube')->paginate(100);

        return view('home.course.youtube.css.index', compact('cssyoutube','cssyoutube1'));

    } 
}
