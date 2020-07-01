<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\javayoutube;

class JavaController extends Controller
{
    public function index(){    

    	$javayoutube = DB::table('javayoutube')->paginate(4);
    	$javayoutube1 = DB::table('javayoutube')->paginate(100);

        return view('home.course.youtube.java.index', compact('javayoutube','javayoutube1')); 
    }
}
