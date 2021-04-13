<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send($sen,$mail){
    	$objDemo = new \stdClass();
    	$objDemo->sender = $sen;
    	$objDemo->receiver = 'Islam.Shushayev';

    	Mail::to($mail)->send(new DemoEmail($objDemo));


    	/*$objDemo = new \stdClass();
    	$objDemo->sender = "Islam";
    	$objDemo->receiver = "Islam";

    	Mail::to("190103470@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));*/

    }
}
