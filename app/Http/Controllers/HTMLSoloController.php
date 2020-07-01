<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\htmlsololearn;
use App\htmlsololearn_content;

class HTMLSoloController extends Controller
{
    public function index(){    

    	$htmlsololearn = DB::table('htmlsololearn')->where('title','Module 1: Overview')->get();
    	$htmlsololearn1 = DB::table('htmlsololearn')->where('title','Module 2: HTML Basics')->get(); 
    	$htmlsololearn2 = DB::table('htmlsololearn')->where('title','Module 3: HTML5')->get();    	  	  	

    	$htmlsololearn3 = DB::table('htmlsololearn_content')->where('Content_Title','What is HTML?')->
        orwhere('Content_Title','Basic HTML Document Structure')->orwhere('Content_Title','Creating Your First HTML Page')->
        orwhere('Content_Title','Creating a Blog')->paginate(1);

        return view('home.course.sololearn.html.index', compact('htmlsololearn','htmlsololearn1','htmlsololearn2','htmlsololearn3'));  

    }

    public function index2(){  
        $htmlsololearn = DB::table('htmlsololearn')->where('title','Module 1: Overview')->get();
        $htmlsololearn1 = DB::table('htmlsololearn')->where('title','Module 2: HTML Basics')->get(); 
        $htmlsololearn2 = DB::table('htmlsololearn')->where('title','Module 3: HTML5')->get();

        $htmlsololearn7 = DB::table('htmlsololearn_content')->where('Content_Title','Paragraphs')->
        orwhere('Content_Title','Text Formatting')->orwhere('Content_Title','Headings, Lines, Comments')->
        orwhere('Content_Title','Blog Project: About Me')->orwhere('Content_Title','Elements')->
        orwhere('Content_Title','Attributes')->orwhere('Content_Title','Images')->orwhere('Content_Title','Links')->
        orwhere('Content_Title','Lists')->orwhere('Content_Title','Blog Project: My Skills')->orwhere('Content_Title','Tables')->
        orwhere('Content_Title','Blog Project: My Schedule')->orwhere('Content_Title','Inline and Block Elements')->
        orwhere('Content_Title','Forms')->orwhere('Content_Title','Blog Project: Contact Form')->orwhere('Content_Title','HTML Colors')->
        orwhere('Content_Title','Frames')->orwhere('Content_Title','Blog Project: Putting It All Together')->paginate(1);

        return view('home.course.sololearn.html.index2', compact('htmlsololearn','htmlsololearn1','htmlsololearn2','htmlsololearn7'));  

    }

    public function index3(){  
        $htmlsololearn = DB::table('htmlsololearn')->where('title','Module 1: Overview')->get();
        $htmlsololearn1 = DB::table('htmlsololearn')->where('title','Module 2: HTML Basics')->get(); 
        $htmlsololearn2 = DB::table('htmlsololearn')->where('title','Module 3: HTML5')->get();

        $htmlsololearn25 = DB::table('htmlsololearn_content')->where('Content_Title','Introduction to HTML5')->
        orwhere('Content_Title','Content Models')->orwhere('Content_Title','HTML5 Page Structure')->
        orwhere('Content_Title','Header, NAV and Footer')->orwhere('Content_Title','Article, Section and Aside')->
        orwhere('Content_Title','The audio Element')->orwhere('Content_Title','The video Element')->
        orwhere('Content_Title','The progress Element')->orwhere('Content_Title','Web Storage API')->orwhere('Content_Title','Geolocation API')->
        orwhere('Content_Title','Drag and Drop API')->orwhere('Content_Title','SVG')->orwhere('Content_Title','SVG Animations and Paths')->
        orwhere('Content_Title','Canvas')->orwhere('Content_Title','SVG vs. Canvas')->orwhere('Content_Title','Canvas Transformations')->
        orwhere('Content_Title','HTML5 Forms, Part 1')->orwhere('Content_Title','HTML5 Forms, Part 2')->paginate(1);      

        return view('home.course.sololearn.html.index3', compact('htmlsololearn','htmlsololearn1','htmlsololearn2','htmlsololearn25'));  

    }


}
