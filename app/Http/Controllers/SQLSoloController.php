<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sqlsololearn;
use App\sqlsololearn_content;

class SQLSoloController extends Controller
{
    public function index(){    

    	$sqlsololearn = DB::table('sqlsololearn')->where('title','Module 1: Basic Concepts')->get();
    	$sqlsololearn1 = DB::table('sqlsololearn')->where('title','Module 2: Filtering, Functions, Subqueries')->get(); 
    	$sqlsololearn2 = DB::table('sqlsololearn')->where('title','Module 3: JOIN, Table Operations')->get();

    	$sqlsololearn3 = DB::table('sqlsololearn_content')->where('Content_Title','Introduction to Databases')->
            orwhere('Content_Title','SQL Statements: SELECT')->orwhere('Content_Title','SQL Syntax Rules')->
            orwhere('Content_Title','Selecting Multiple Columns')->orwhere('Content_Title','DISTINCT and LIMIT')->
            orwhere('Content_Title','Sorting Results')->paginate(1);    	

        return view('home.course.sololearn.sql.index', compact('sqlsololearn','sqlsololearn1','sqlsololearn2','sqlsololearn3'));  
    } 

    public function index2(){    
        $sqlsololearn = DB::table('sqlsololearn')->where('title','Module 1: Basic Concepts')->get();
        $sqlsololearn1 = DB::table('sqlsololearn')->where('title','Module 2: Filtering, Functions, Subqueries')->get(); 
        $sqlsololearn2 = DB::table('sqlsololearn')->where('title','Module 3: JOIN, Table Operations')->get();

        $sqlsololearn9 = DB::table('sqlsololearn_content')->where('Content_Title','The WHERE Statement')->
        orwhere('Content_Title','Filtering with AND, OR')->orwhere('Content_Title','IN, NOT IN Statements')->
        orwhere('Content_Title','Custom Columns')->orwhere('Content_Title','Functions')->
        orwhere('Content_Title','Subqueries')->orwhere('Content_Title','LIKE and MIN')->paginate(1);           

        return view('home.course.sololearn.sql.index2', compact('sqlsololearn','sqlsololearn1','sqlsololearn2','sqlsololearn9'));  
    } 

    public function index3(){    
        $sqlsololearn = DB::table('sqlsololearn')->where('title','Module 1: Basic Concepts')->get();
        $sqlsololearn1 = DB::table('sqlsololearn')->where('title','Module 2: Filtering, Functions, Subqueries')->get(); 
        $sqlsololearn2 = DB::table('sqlsololearn')->where('title','Module 3: JOIN, Table Operations')->get();

        $sqlsololearn16 = DB::table('sqlsololearn_content')->where('Content_Title','Joining Tables')->
        orwhere('Content_Title','Types of Join')->orwhere('Content_Title','UNION')->orwhere('Content_Title','The INSERT Statement')->
        orwhere('Content_Title','UPDATE and DELETE Statements')->orwhere('Content_Title','Creating a Table')->
        orwhere('Content_Title','NOT NULL and AUTO_INCREMENT')->orwhere('Content_Title','Alter, Drop, Rename a Table')->
        orwhere('Content_Title','Views')->paginate(1);           

        return view('home.course.sololearn.sql.index3', compact('sqlsololearn','sqlsololearn1','sqlsololearn2','sqlsololearn16'));  
    } 
}
