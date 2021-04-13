<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class AjaxController extends Controller
{
    $msg = "You buy ticket succesfully";
    	return response()->json(array('msg' => $msg),200);
}
