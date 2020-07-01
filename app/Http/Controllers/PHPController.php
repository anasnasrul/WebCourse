<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\phpyoutube;

class PHPController extends Controller
{
    public function index(){    

    	$phpyoutube = DB::table('phpyoutube')->paginate(4);
    	$phpyoutube1 = DB::table('phpyoutube')->paginate(100);

    	return view('home.course.youtube.php.index', compact('phpyoutube','phpyoutube1'));

    } 
}
