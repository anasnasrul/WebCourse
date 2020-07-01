<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\htmlyoutube;

class HTMLController extends Controller
{
    public function index(){    

    	$htmlyoutube = DB::table('htmlyoutube')->paginate(4);
    	$htmlyoutube1 = DB::table('htmlyoutube')->paginate(100);

        return view('home.course.youtube.html.index', compact('htmlyoutube','htmlyoutube1')); 
    }
}
