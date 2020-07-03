<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pythonudemy;
use App\pythonudemy_content;

class PythonUdemyController extends Controller
{
    public function index(){    

    	$pythonudemy = DB::table('pythonudemy')->where('title','Decision Trees, Random Forests. AdaBoost and XGBoost in Python')->get();

        $pythonudemy1 = DB::table('pythonudemy_content')->where('Content_Title','Section 1 - Introduction')->
        orwhere('Content_Title','Section 2 - Setting up Python and Python Crash Course')->orwhere('Content_Title','Section 3 - Machine Learning Basics')->
        orwhere('Content_Title','Section 4 - Simple Decision Trees')->orwhere('Content_Title','Section 5 - Simple Classification Tree')->
        orwhere('Content_Title','Section 6 - Ensemble technique 1 - Bagging')->orwhere('Content_Title','Section 7 - Ensemble technique 2 - Random Forests')->
        orwhere('Content_Title','Section 8 - Ensemble technique 3 - Boosting')->orwhere('Content_Title','Section 9 - Add-On 1 - Preprocessing and Preparing data before making ML model')->
        orwhere('Content_Title','Section 10 - Conclusion')
        ->paginate(1);     	  	

        return view('home.course.udemy.python.index', compact('pythonudemy','pythonudemy1'));      

    } 
}
