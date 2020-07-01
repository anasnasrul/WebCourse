<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\phpsololearn;
use App\phpsololearn_content;

class PHPSoloController extends Controller
{
    public function index(){    

    	$phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
    	$phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
    	$phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
    	$phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
    	$phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
    	$phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
    	$phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
    	$phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
    	$phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();  

        $phpsololearn9 = DB::table('phpsololearn_content')->where('Content_Title','Introduction to PHP')->orwhere('Content_Title','PHP Tags')->
        orwhere('Content_Title','Echo')->orwhere('Content_Title','Comments')->paginate(1);     	  	

        return view('home.course.sololearn.php.index', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
        	'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn9'));  

    } 

    public function index2(){    
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();

        $phpsololearn13 = DB::table('phpsololearn_content')->where('Content_Title','Variables')->
        orwhere('Content_Title','Constants')->orwhere('Content_Title','Data Types')->orwhere('Content_Title','Variable Scope')->
        orwhere('Content_Title','Variable Variables')->paginate(1);               

        return view('home.course.sololearn.php.index2', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn13'));  

    } 

    public function index3(){    
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();  

        $phpsololearn18 = DB::table('phpsololearn_content')->where('Content_Title','Arithmetic Operators')->
        orwhere('Content_Title','Assignment Operators')->orwhere('Content_Title','Comparison Operators')->
        orwhere('Content_Title','Logical Operators')->paginate(1);

        return view('home.course.sololearn.php.index3', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn18'));  

    }

    public function index4(){   
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();

        $phpsololearn22 = DB::table('phpsololearn_content')->where('Content_Title','Numeric Arrays')->
        orwhere('Content_Title','Associative Arrays')->orwhere('Content_Title','Multi-Dimensional Arrays')->paginate(1); 

        return view('home.course.sololearn.php.index4', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn22'));  

    }

    public function index5(){  
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();  

        $phpsololearn25 = DB::table('phpsololearn_content')->where('Content_Title','The If Else Statement')->
        orwhere('Content_Title','The Elseif Statement')->orwhere('Content_Title','The while Loop')->
        orwhere('Content_Title','The Do While Loop')->orwhere('Content_Title','The For Loop')->
        orwhere('Content_Title','The Foreach Loop')->orwhere('Content_Title','The Switch Statement')->
        orwhere('Content_Title','The Break Statement')->orwhere('Content_Title','The Continue Statement')->
        orwhere('Content_Title','Include and Require')->paginate(1);

        return view('home.course.sololearn.php.index5', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn25'));  

    }

    public function index6(){
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();  

        $phpsololearn35 = DB::table('phpsololearn_content')->where('Content_Title','User-Defined Functions')->
        orwhere('Content_Title','Function Parameters')->orwhere('Content_Title','The Return Statement')->paginate(1);

        return view('home.course.sololearn.php.index6', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn35'));  

    }

    public function index7(){    
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();  

        $phpsololearn38 = DB::table('phpsololearn_content')->where('Content_Title','$_SERVER Variables: Script Name')->
        orwhere('Content_Title','$_SERVER Variables: Host Name')->orwhere('Content_Title','PHP Forms')->
        orwhere('Content_Title','GET and POST')->orwhere('Content_Title','$_SESSION')->orwhere('Content_Title','$_COOKIE')->paginate(1);

        return view('home.course.sololearn.php.index7', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn38'));  

    }

    public function index8(){    
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();

        $phpsololearn44 = DB::table('phpsololearn_content')->where('Content_Title','Writing to a File')->
        orwhere('Content_Title','Appending to a File')->orwhere('Content_Title','Reading a File')->paginate(1);

        return view('home.course.sololearn.php.index8', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn44'));  

    }

    public function index9(){    
        $phpsololearn = DB::table('phpsololearn')->where('title','Module 1: Basic Syntax')->get();
        $phpsololearn1 = DB::table('phpsololearn')->where('title','Module 2: Variables')->get(); 
        $phpsololearn2 = DB::table('phpsololearn')->where('title','Module 3: Operators')->get();
        $phpsololearn3 = DB::table('phpsololearn')->where('title','Module 4: Arrays')->get();
        $phpsololearn4 = DB::table('phpsololearn')->where('title','Module 5: Control Structures')->get();
        $phpsololearn5 = DB::table('phpsololearn')->where('title','Module 6: Functions')->get();
        $phpsololearn6 = DB::table('phpsololearn')->where('title','Module 7: Predefined Variables')->get();
        $phpsololearn7 = DB::table('phpsololearn')->where('title','Module 8: Working with Files')->get();
        $phpsololearn8 = DB::table('phpsololearn')->where('title','Module 9: Object-Oriented PHP')->get();

        $phpsololearn47 = DB::table('phpsololearn_content')->where('Content_Title','Classes and Objects')->
        orwhere('Content_Title','Constructor and Destructor')->orwhere('Content_Title','Class Inheritance')->
        orwhere('Content_Title','static and final')->paginate(1);

        return view('home.course.sololearn.php.index9', compact('phpsololearn','phpsololearn1','phpsololearn2','phpsololearn3',
            'phpsololearn4','phpsololearn5','phpsololearn6','phpsololearn7','phpsololearn8','phpsololearn47'));  

    }
}
