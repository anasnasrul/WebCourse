<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\netudemy;
use App\netudemy_content;

class NetUdemyController extends Controller
{
    public function index(){    

    	$netudemy = DB::table('netudemy')->where('title','ASP.net Core MVC, Quick and Practical')->get();   	

        $netudemy1 = DB::table('netudemy_content')->where('Content_Title','Section 1 - About this course')->
        orwhere('Content_Title','Section 2 - Introduction')->orwhere('Content_Title','Section 3 - A Tour around controllers')->
        orwhere('Content_Title','Section 4 - A Tour around views')->orwhere('Content_Title','Section 5 - Using forms')->
        orwhere('Content_Title','Section 6 - Services and dependency injection')->orwhere('Content_Title','Section 7 - Configuration Files')->
        orwhere('Content_Title','Section 8 - Using entity framework core to create models from existing database')->
        orwhere('Content_Title','Section 9 - A bit cryptography')->orwhere('Content_Title','Section 10 - Creating user management using entity framework core')->
        orwhere('Content_Title','Section 11 - Routing')->orwhere('Content_Title','Section 12 - Implementing custom authentication and authorization')->
        orwhere('Content_Title','Section 13 - Good Bye')->orwhere('Content_Title','Section 14 - Q and A')
        ->paginate(1);     	  	

        return view('home.course.udemy.net.index', compact('netudemy','netudemy1'));      

    } 
}
