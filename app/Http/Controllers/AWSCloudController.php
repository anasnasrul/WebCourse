<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\awscloududemy;
use App\awscloududemy_content;

class AWSCloudController extends Controller
{
    public function index(){    

    	$awscloududemy = DB::table('awscloududemy')->where('title','[New] Ultimate AWS Certified Cloud Practitioner - 2020')->get();
    	

        $awscloududemy1 = DB::table('awscloududemy_content')->where('Content_Title','Section 1 - Introduction')->
        orwhere('Content_Title','Section 2 - Code and Slides Download')->orwhere('Content_Title','Section 3 - What is cloud computing')->
        orwhere('Content_Title','Section 4 - IAM - Identity and Access Management')
        ->paginate(1);     	  	

        return view('home.course.udemy.awscloud.index', compact('awscloududemy','awscloududemy1'));      

    } 
}
