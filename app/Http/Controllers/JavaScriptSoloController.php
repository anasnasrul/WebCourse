<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\jssololearn;
use App\jssololearn_content;


class JavaScriptSoloController extends Controller
{
    public function index(){    

    	$jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
    	$jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
    	$jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
    	$jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
    	$jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
    	$jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
    	$jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
    	$jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get(); 

        $jssololearn8 = DB::table('jssololearn_content')->where('Content_Title','Introduction to JavaScript')->
        orwhere('Content_Title','Creating Your First JavaScript')->orwhere('Content_Title','Adding JavaScript to a Web Page')->
        orwhere('Content_Title','External JavaScript')->orwhere('Content_Title','Comments in JavaScript')->paginate(1);         	  	

        return view('home.course.sololearn.javascript.index', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
        	'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn8'));        
    } 

    public function index2(){    
        $jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
        $jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
        $jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
        $jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
        $jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
        $jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
        $jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
        $jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get(); 

        $jssololearn13 = DB::table('jssololearn_content')->where('Content_Title','Variables')->orwhere('Content_Title','Data Types')->
        orwhere('Content_Title','Math Operators')->orwhere('Content_Title','Assignment Operators')->orwhere('Content_Title','Comparison Operators')->
        orwhere('Content_Title','Logical or Boolean Operators')->orwhere('Content_Title','String Operators')->paginate(1);

        return view('home.course.sololearn.javascript.index2', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
            'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn13'));        
    }  
   
   public function index3(){  
        $jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
        $jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
        $jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
        $jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
        $jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
        $jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
        $jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
        $jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get();  

        $jssololearn20 = DB::table('jssololearn_content')->where('Content_Title','The if Statement')->
        orwhere('Content_Title','The if else Statement')->orwhere('Content_Title','The if else if else Statement')->
        orwhere('Content_Title','The switch Statement')->orwhere('Content_Title','The For Loop')->
        orwhere('Content_Title','The While Loop')->orwhere('Content_Title','The Do...While Loop')->
        orwhere('Content_Title','Break and Continue')->paginate(1);

        return view('home.course.sololearn.javascript.index3', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
            'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn20'));        
    } 

    public function index4(){  
        $jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
        $jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
        $jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
        $jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
        $jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
        $jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
        $jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
        $jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get();

        $jssololearn28 = DB::table('jssololearn_content')->where('Content_Title','User-Defined Functions')->
        orwhere('Content_Title','Function Parameters')->orwhere('Content_Title','Using Multiple Parameters with Functions')->
        orwhere('Content_Title','The return Statement')->orwhere('Content_Title','Alert, Prompt, Confirm')->paginate(1);

        return view('home.course.sololearn.javascript.index4', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
            'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn28'));        
    } 

    public function index5(){   
        $jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
        $jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
        $jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
        $jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
        $jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
        $jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
        $jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
        $jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get(); 

        $jssololearn33 = DB::table('jssololearn_content')->where('Content_Title','Introducing Objects')->
        orwhere('Content_Title','Creating Your Own Objects')->orwhere('Content_Title','Object Initialization')->
        orwhere('Content_Title','Adding Methods')->paginate(1);

        return view('home.course.sololearn.javascript.index5', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
            'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn33'));        
    } 

    public function index6(){   
        $jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
        $jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
        $jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
        $jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
        $jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
        $jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
        $jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
        $jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get(); 

        $jssololearn37 = DB::table('jssololearn_content')->where('Content_Title','Arrays')->
        orwhere('Content_Title','Other Ways to Create Arrays')->orwhere('Content_Title','Array Properties & Methods')->
        orwhere('Content_Title','Associative Arrays')->orwhere('Content_Title','The Math Object')->
        orwhere('Content_Title','The Date Object')->paginate(1);

        return view('home.course.sololearn.javascript.index6', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
            'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn37'));        
    } 

    public function index7(){    
        $jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
        $jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
        $jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
        $jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
        $jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
        $jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
        $jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
        $jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get();

        $jssololearn43 = DB::table('jssololearn_content')->where('Content_Title','What is DOM?')->
        orwhere('Content_Title','Selecting Elements')->orwhere('Content_Title','Changing Elements')->
        orwhere('Content_Title','Adding & Removing Elements')->orwhere('Content_Title','Creating Animations')->
        orwhere('Content_Title','Handling Events')->orwhere('Content_Title','Event Propagation')->
        orwhere('Content_Title','Creating an Image Slider')->orwhere('Content_Title','Form Validation')->paginate(1);

        return view('home.course.sololearn.javascript.index7', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
            'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn43'));        
    } 

    public function index8(){    
        $jssololearn = DB::table('jssololearn')->where('title','Module 1: Overview')->get();
        $jssololearn1 = DB::table('jssololearn')->where('title','Module 2: Basic Concepts')->get(); 
        $jssololearn2 = DB::table('jssololearn')->where('title','Module 3: Conditionals and Loops')->get();
        $jssololearn3 = DB::table('jssololearn')->where('title','Module 4: Functions')->get();
        $jssololearn4 = DB::table('jssololearn')->where('title','Module 5: Objects')->get();
        $jssololearn5 = DB::table('jssololearn')->where('title','Module 6: Core Objects')->get();
        $jssololearn6 = DB::table('jssololearn')->where('title','Module 7: DOM and Events')->get();
        $jssololearn7 = DB::table('jssololearn')->where('title','Module 8: ECMAScript 6')->get();

        $jssololearn52 = DB::table('jssololearn_content')->where('Content_Title','Intro to ES6')->
        orwhere('Content_Title','ES6 Variables and Strings')->orwhere('Content_Title','Loops and Functions in ES6')->
        orwhere('Content_Title','ES6 Objects')->orwhere('Content_Title','ES6 Destructuring')->orwhere('Content_Title','Rest and Spread')->
        orwhere('Content_Title','ES6 Classes')->orwhere('Content_Title','ES6 Map and Set')->orwhere('Content_Title','More on ES6')->paginate(1);

        return view('home.course.sololearn.javascript.index8', compact('jssololearn','jssololearn1','jssololearn2','jssololearn3',
            'jssololearn4','jssololearn5','jssololearn6','jssololearn7','jssololearn52'));        
    } 
}
