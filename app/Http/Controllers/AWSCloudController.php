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
        $awscloududemy1 = DB::table('awscloududemy')->where('title','Free AWS Certified Cloud Practitioner 2019')->get();
    	

        $awscloududemy2 = DB::table('awscloududemy_content')->where('Content_Title','Section 1 - Introduction')->
        orwhere('Content_Title','Section 2 - Code and Slides Download')->orwhere('Content_Title','Section 3 - What is cloud computing')->
        orwhere('Content_Title','Section 4 - IAM - Identity and Access Management')->orwhere('Content_Title','Section 5 - EC2 - Elastic Compute Cloud')->
        orwhere('Content_Title','Section 6 - EC2 Instance Storage')->orwhere('Content_Title','Section 7 - ELB and ASG - Elastic Load Balancing and Auto Scalling Groups')->
        orwhere('Content_Title','Section 8 - S3')->orwhere('Content_Title','Section 9 - Databases and Analytics')->orwhere('Content_Title','Section 10 - ECS')->
        orwhere('Content_Title','Section 11 - Lambda')->orwhere('Content_Title','Section 12 - Deployment and Managing Infrastructure at scale')->
        orwhere('Content_Title','Section 13 - Leveraging the AWS Global Infrastructure')->orwhere('Content_Title','Section 14 - Cloud Integrations')->
        orwhere('Content_Title','Section 15 - Cloud Monitoring')->orwhere('Content_Title','Section 16 - VPC and Networking')->
        orwhere('Content_Title','Section 17 - Security and Compliance')->orwhere('Content_Title','Section 18 - Machine Learning')->
        orwhere('Content_Title','Section 19 - Account Management, Billing and Support')->orwhere('Content_Title','Section 20 - AWS Architecting and Ecosystem')->
        orwhere('Content_Title','Section 21 - Preparing for the Exam and Practice Exam - AWS Certified Cloud Practitioner')->orwhere('Content_Title','Section 22 - Congratulations - AWS Certified Cloud Practitioner')
        ->paginate(1);     	  	

        return view('home.course.udemy.awscloud.index', compact('awscloududemy','awscloududemy1','awscloududemy2'));      

    } 

    public function index2(){    

        $awscloududemy = DB::table('awscloududemy')->where('title','[New] Ultimate AWS Certified Cloud Practitioner - 2020')->get();
        $awscloududemy1 = DB::table('awscloududemy')->where('title','Free AWS Certified Cloud Practitioner 2019')->get();        

        $awscloududemy3 = DB::table('awscloududemy_content')->where('Content_Title','Section 1 - Introduction')->
        orwhere('Content_Title','Section 2 - Cloud Concepts')->orwhere('Content_Title','Section 3 - AWS Global Infrastructure')->
        orwhere('Content_Title','Section 4 - Getting Started')->orwhere('Content_Title','Section 5 - Hands on')->
        orwhere('Content_Title','Section 6 - EC2 pricing models')->orwhere('Content_Title','Section 7 - Billing and Pricing')->
        orwhere('Content_Title','Section 8 - Technology Overview')->orwhere('Content_Title','Section 9 - Security')->
        orwhere('Content_Title','Section 10 - Variation Study')->paginate(1);          

        return view('home.course.udemy.awscloud.index2', compact('awscloududemy','awscloududemy1','awscloududemy3'));      

    } 
}
