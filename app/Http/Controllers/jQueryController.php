<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\jqueryyoutube;

class jQueryController extends Controller
{
    public function index(){    

    	$jqueryyoutube = DB::table('jqueryyoutube')->paginate(4);
    	$jqueryyoutube1 = DB::table('jqueryyoutube')->paginate(100);

        return view('home.course.youtube.jquery.index', compact('jqueryyoutube','jqueryyoutube1')); 
    }
}
