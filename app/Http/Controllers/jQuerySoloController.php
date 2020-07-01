<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\jquerysololearn;
use App\jquerysololearn_content;

class jQuerySoloController extends Controller
{
    public function index(){    

    	$jquerysololearn = DB::table('jquerysololearn')->where('title','Module 1: Overview')->get();
    	$jquerysololearn1 = DB::table('jquerysololearn')->where('title','Module 2: Attributes and Content')->get(); 
    	$jquerysololearn2 = DB::table('jquerysololearn')->where('title','Module 3: Manipulating CSS')->get();
    	$jquerysololearn3 = DB::table('jquerysololearn')->where('title','Module 4: Manipulate DOM')->get();
    	$jquerysololearn4 = DB::table('jquerysololearn')->where('title','Module 5: Events')->get();
    	$jquerysololearn5 = DB::table('jquerysololearn')->where('title','Module 6: Effects')->get();   

        $jquerysololearn6 = DB::table('jquerysololearn_content')->where('Content_Title','What is jQuery')->
        orwhere('Content_Title','Getting Started')->orwhere('Content_Title','Selectors')->paginate(1);

        return view('home.course.sololearn.jquery.index', compact('jquerysololearn','jquerysololearn1','jquerysololearn2','jquerysololearn3',
        	'jquerysololearn4','jquerysololearn5','jquerysololearn6'));  
    } 

    public function index2(){    
        $jquerysololearn = DB::table('jquerysololearn')->where('title','Module 1: Overview')->get();
        $jquerysololearn1 = DB::table('jquerysololearn')->where('title','Module 2: Attributes and Content')->get(); 
        $jquerysololearn2 = DB::table('jquerysololearn')->where('title','Module 3: Manipulating CSS')->get();
        $jquerysololearn3 = DB::table('jquerysololearn')->where('title','Module 4: Manipulate DOM')->get();
        $jquerysololearn4 = DB::table('jquerysololearn')->where('title','Module 5: Events')->get();
        $jquerysololearn5 = DB::table('jquerysololearn')->where('title','Module 6: Effects')->get();   

        $jquerysololearn9 = DB::table('jquerysololearn_content')->where('Content_Title','Get & Set Attribute Values')->
        orwhere('Content_Title','Removing Attributes')->orwhere('Content_Title','Get and Set Content')->
        orwhere('Content_Title','val()')->orwhere('Content_Title','Adding Content')->paginate(1);

        return view('home.course.sololearn.jquery.index2', compact('jquerysololearn','jquerysololearn1','jquerysololearn2','jquerysololearn3',
            'jquerysololearn4','jquerysololearn5','jquerysololearn9'));  
    } 

    public function index3(){    
        $jquerysololearn = DB::table('jquerysololearn')->where('title','Module 1: Overview')->get();
        $jquerysololearn1 = DB::table('jquerysololearn')->where('title','Module 2: Attributes and Content')->get(); 
        $jquerysololearn2 = DB::table('jquerysololearn')->where('title','Module 3: Manipulating CSS')->get();
        $jquerysololearn3 = DB::table('jquerysololearn')->where('title','Module 4: Manipulate DOM')->get();
        $jquerysololearn4 = DB::table('jquerysololearn')->where('title','Module 5: Events')->get();
        $jquerysololearn5 = DB::table('jquerysololearn')->where('title','Module 6: Effects')->get();  

        $jquerysololearn14 = DB::table('jquerysololearn_content')->where('Content_Title','Adding and Removing Classes')->
        orwhere('Content_Title','CSS Properties')->orwhere('Content_Title','Dimensions')->paginate(1);

        return view('home.course.sololearn.jquery.index3', compact('jquerysololearn','jquerysololearn1','jquerysololearn2','jquerysololearn3',
            'jquerysololearn4','jquerysololearn5','jquerysololearn14'));  
    } 

    public function index4(){    
        $jquerysololearn = DB::table('jquerysololearn')->where('title','Module 1: Overview')->get();
        $jquerysololearn1 = DB::table('jquerysololearn')->where('title','Module 2: Attributes and Content')->get(); 
        $jquerysololearn2 = DB::table('jquerysololearn')->where('title','Module 3: Manipulating CSS')->get();
        $jquerysololearn3 = DB::table('jquerysololearn')->where('title','Module 4: Manipulate DOM')->get();
        $jquerysololearn4 = DB::table('jquerysololearn')->where('title','Module 5: Events')->get();
        $jquerysololearn5 = DB::table('jquerysololearn')->where('title','Module 6: Effects')->get();   

        $jquerysololearn17 = DB::table('jquerysololearn_content')->where('Content_Title','The DOM')->
        orwhere('Content_Title','Traversing')->orwhere('Content_Title','Removing Elements')->paginate(1);

        return view('home.course.sololearn.jquery.index4', compact('jquerysololearn','jquerysololearn1','jquerysololearn2','jquerysololearn3',
            'jquerysololearn4','jquerysololearn5','jquerysololearn17'));  
    } 

    public function index5(){    
        $jquerysololearn = DB::table('jquerysololearn')->where('title','Module 1: Overview')->get();
        $jquerysololearn1 = DB::table('jquerysololearn')->where('title','Module 2: Attributes and Content')->get(); 
        $jquerysololearn2 = DB::table('jquerysololearn')->where('title','Module 3: Manipulating CSS')->get();
        $jquerysololearn3 = DB::table('jquerysololearn')->where('title','Module 4: Manipulate DOM')->get();
        $jquerysololearn4 = DB::table('jquerysololearn')->where('title','Module 5: Events')->get();
        $jquerysololearn5 = DB::table('jquerysololearn')->where('title','Module 6: Effects')->get(); 

        $jquerysololearn20 = DB::table('jquerysololearn_content')->where('Content_Title','Handling Events')->
        orwhere('Content_Title','The Event Object')->orwhere('Content_Title','Creating a To-Do List')->paginate(1);

        return view('home.course.sololearn.jquery.index5', compact('jquerysololearn','jquerysololearn1','jquerysololearn2','jquerysololearn3',
            'jquerysololearn4','jquerysololearn5','jquerysololearn20'));  
    } 

    public function index6(){    
        $jquerysololearn = DB::table('jquerysololearn')->where('title','Module 1: Overview')->get();
        $jquerysololearn1 = DB::table('jquerysololearn')->where('title','Module 2: Attributes and Content')->get(); 
        $jquerysololearn2 = DB::table('jquerysololearn')->where('title','Module 3: Manipulating CSS')->get();
        $jquerysololearn3 = DB::table('jquerysololearn')->where('title','Module 4: Manipulate DOM')->get();
        $jquerysololearn4 = DB::table('jquerysololearn')->where('title','Module 5: Events')->get();
        $jquerysololearn5 = DB::table('jquerysololearn')->where('title','Module 6: Effects')->get();   

        $jquerysololearn23 = DB::table('jquerysololearn_content')->where('Content_Title','Hide/Show, Fade, Slide')->
        orwhere('Content_Title','animate()')->orwhere('Content_Title','Creating a Drop-Down Menu')->paginate(1);

        return view('home.course.sololearn.jquery.index6', compact('jquerysololearn','jquerysololearn1','jquerysololearn2','jquerysololearn3',
            'jquerysololearn4','jquerysololearn5','jquerysololearn23'));  
    } 
}
