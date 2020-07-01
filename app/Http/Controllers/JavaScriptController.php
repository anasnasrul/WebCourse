<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\jsyoutube;

class JavaScriptController extends Controller
{
    public function index(){    

    	$jsyoutube = DB::table('jsyoutube')->paginate(4);
    	$jsyoutube1 = DB::table('jsyoutube')->paginate(100);

        return view('home.course.youtube.javascript.index', compact('jsyoutube','jsyoutube1'));        

    }
}
