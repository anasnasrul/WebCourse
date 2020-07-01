<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pythonsololearn;
use App\pythonsololearn_content;

class PythonSoloController extends Controller
{
    public function index(){    

    	$pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
    	$pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
    	$pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
    	$pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
    	$pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
    	$pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
    	$pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
    	$pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();   	
    	$pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get(); 

        $pythonsololearn9 = DB::table('pythonsololearn_content')->where('Content_Title','What is Python?')->
        orwhere('Content_Title','Your First Program')->orwhere('Content_Title','Simple Operations')->
        orwhere('Content_Title','Floats')->orwhere('Content_Title','Other Numerical Operations')->orwhere('Content_Title','Strings')->
        orwhere('Content_Title','Simple Input and Output')->orwhere('Content_Title','String Operations')->orwhere('Content_Title','Type Conversion')->
        orwhere('Content_Title','Variables')->orwhere('Content_Title','In-Place Operators')->orwhere('Content_Title','Using an Editor')->paginate(1);

        return view('home.course.sololearn.python.index', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
        	'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn9'));  

    } 

    public function index2(){   
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get(); 

        $pythonsololearn21 = DB::table('pythonsololearn_content')->where('Content_Title','Booleans and Comparisons')->
        orwhere('Content_Title','if Statements')->orwhere('Content_Title','else Statements')->orwhere('Content_Title','Boolean Logic')->
        orwhere('Content_Title','Operator Precedence')->orwhere('Content_Title','while Loops')->orwhere('Content_Title','Lists')->
        orwhere('Content_Title','List Operations')->orwhere('Content_Title','List Functions')->orwhere('Content_Title','Range')->
        orwhere('Content_Title','for Loops')->orwhere('Content_Title','A Simple Calculator')->paginate(1);

        return view('home.course.sololearn.python.index2', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn21'));  

    } 

     public function index3(){    
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get();

        $pythonsololearn33 = DB::table('pythonsololearn_content')->where('Content_Title','Code Reuse')->orwhere('Content_Title','Functions')->
        orwhere('Content_Title','Function Arguments')->orwhere('Content_Title','Returning from Functions')->
        orwhere('Content_Title','Comments and Docstrings')->orwhere('Content_Title','Functions as Objects')->orwhere('Content_Title','Modules')->
        orwhere('Content_Title','The Standard Library and pip')->paginate(1);

        return view('home.course.sololearn.python.index3', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn33'));  

    } 

     public function index4(){    
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get();

        $pythonsololearn41 = DB::table('pythonsololearn_content')->where('Content_Title','Exceptions')->orwhere('Content_Title','Exception Handling')->
        orwhere('Content_Title','finally')->orwhere('Content_Title','Raising Exceptions')->orwhere('Content_Title','Assertions')->
        orwhere('Content_Title','Opening Files')->orwhere('Content_Title','Reading Files')->orwhere('Content_Title','Writing Files')->
        orwhere('Content_Title','Working with Files')->paginate(1);

        return view('home.course.sololearn.python.index4', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn41'));  

    } 

     public function index5(){    
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get();

        $pythonsololearn50 = DB::table('pythonsololearn_content')->where('Content_Title','None')->orwhere('Content_Title','Dictionaries')->
        orwhere('Content_Title','Dictionary Functions')->orwhere('Content_Title','Tuples')->orwhere('Content_Title','List Slices')->
        orwhere('Content_Title','List Comprehensions')->orwhere('Content_Title','String Formatting')->orwhere('Content_Title','Useful Functions')->
        orwhere('Content_Title','Text Analyzer')->paginate(1);

        return view('home.course.sololearn.python.index5', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn50'));  

    } 

     public function index6(){    
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get();

        $pythonsololearn59 = DB::table('pythonsololearn_content')->where('Content_Title','Functional Programming')->
        orwhere('Content_Title','Lambdas')->orwhere('Content_Title','Map and Filter')->orwhere('Content_Title','Generators')->
        orwhere('Content_Title','Decorators')->orwhere('Content_Title','Recursion')->orwhere('Content_Title','Sets')->
        orwhere('Content_Title','Itertools')->paginate(1);

        return view('home.course.sololearn.python.index6', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn59'));  

    } 

     public function index7(){    
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get(); 

        $pythonsololearn67 = DB::table('pythonsololearn_content')->where('Content_Title','Classes')->orwhere('Content_Title','Inheritance')->
        orwhere('Content_Title','Magic Methods and Operator Overloading')->orwhere('Content_Title','Object Lifecycle')->
        orwhere('Content_Title','Data Hiding')->orwhere('Content_Title','Class and Static Methods')->orwhere('Content_Title','Properties')->
        orwhere('Content_Title','A Simple Game')->paginate(1);

        return view('home.course.sololearn.python.index7', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn67'));  

    } 

     public function index8(){    
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get(); 

        $pythonsololearn75 = DB::table('pythonsololearn_content')->where('Content_Title','Regular Expressions')->
        orwhere('Content_Title','Simple Metacharacters')->orwhere('Content_Title','Character Classes')->
        orwhere('Content_Title','More Metacharacters')->orwhere('Content_Title','Groups')->orwhere('Content_Title','Special Sequences')->
        orwhere('Content_Title','Email Extraction')->paginate(1);

        return view('home.course.sololearn.python.index8', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn75'));  

    } 

     public function index9(){    
        $pythonsololearn = DB::table('pythonsololearn')->where('title','Module 1: Basic Concepts')->get();
        $pythonsololearn1 = DB::table('pythonsololearn')->where('title','Module 2: Control Structures')->get(); 
        $pythonsololearn2 = DB::table('pythonsololearn')->where('title','Module 3: Functions and Modules')->get();
        $pythonsololearn3 = DB::table('pythonsololearn')->where('title','Module 4: Exceptions and Files')->get();
        $pythonsololearn4 = DB::table('pythonsololearn')->where('title','Module 5: More Types')->get();
        $pythonsololearn5 = DB::table('pythonsololearn')->where('title','Module 6: Functional Programming')->get();
        $pythonsololearn6 = DB::table('pythonsololearn')->where('title','Module 7: Object-Oriented Programming')->get();
        $pythonsololearn7 = DB::table('pythonsololearn')->where('title','Module 8: Regular Expressions')->get();    
        $pythonsololearn8 = DB::table('pythonsololearn')->where('title','Module 9: Pythonicness and Packaging')->get(); 

        $pythonsololearn82 = DB::table('pythonsololearn_content')->where('Content_Title','The Zen of Python')->orwhere('Content_Title','PEP')->
        orwhere('Content_Title','More on Function Arguments')->orwhere('Content_Title','Tuple Unpacking')->
        orwhere('Content_Title','Ternary Operator')->orwhere('Content_Title','More on else Statements')->orwhere('Content_Title','__main__')->
        orwhere('Content_Title','Major 3rd-Party Libraries')->orwhere('Content_Title','Packages')->
        orwhere('Content_Title','Packaging for Users')->paginate(1);

        return view('home.course.sololearn.python.index9', compact('pythonsololearn','pythonsololearn1','pythonsololearn2','pythonsololearn3',
            'pythonsololearn4','pythonsololearn5','pythonsololearn6','pythonsololearn7','pythonsololearn8','pythonsololearn82'));  

    } 
}
