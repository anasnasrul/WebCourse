<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\javaudemy;
use App\javaudemy_content;

class JavaUdemyController extends Controller
{
    public function index(){    

    	$javaudemy = DB::table('javaudemy')->where('title','Java Database Connection - JDBC and MySQL')->get();

        $javaudemy1 = DB::table('javaudemy_content')->where('Content_Title','Section 1 - Introduction')->
        orwhere('Content_Title','Section 2 - Getting started with JDBC')->orwhere('Content_Title','Section 3 - Performing Basic JDBC Operations')->
        orwhere('Content_Title','Section 4 - Calling stored procedures')->orwhere('Content_Title','Section 5 - Transactions and MetaData')->
        orwhere('Content_Title','Section 6 - Handling BLOBs and CLOBs')->orwhere('Content_Title','Section 7 - Database Configuration')->
        orwhere('Content_Title','Section 8 - Summary')->orwhere('Content_Title','Section 9 - Discount coupon for more of my java training')->paginate(1);     	  	

        return view('home.course.udemy.java.index', compact('javaudemy','javaudemy1'));      

    } 
}
