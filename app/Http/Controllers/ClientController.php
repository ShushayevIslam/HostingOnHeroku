<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Airport;
use App\Http\Controllers\MailController;
use DB;
use public\uploads;
class ClientController extends Controller
{
    function save(Request $req){
    	
    	$client = new Client;
    	$client->first_name = $req->clients_name;
    	$client->last_name = $req->clients_surname;
    	$client->email = $req->email;
    	//$client->gender = $req->gender;
    	$client->phone = $req->phone_num;
    	$client->filename = $req->myfile;
    	
    	if($req->male == "on"){
    		$client->gender = 1;
    	}
    	else{
    		$client->gender = 0;
    	}

    	$client->save();

    	$mail_controller = new MailController;
    	$mail_controller->send($req->clients_name,$req->email);

    	$airport = new AirPort;
    	$airport->client_id = $client->id;
    	$airport->date_in = $req->departure_date;
    	$airport->date_out = $req->return_date;
    	$airport->num_of_people = $req->num_of_clients;

    	
    	$airport->save();

    	 
    	$file = $req->file('myfile');
    	//echo $file->getSize();
    	$destinationPath = 'public\uploads';
    	if($file != null){
    		$file->move($destinationPath,$file->getClientOriginalName());
    	}
    	else{
    		echo "NO";
    	}
    }


    static function get_inf(){
    	$group_year = DB::select('select YEAR(date_in),count(id) from airports group by YEAR(date_in)');
    	return $group_year;

    	//echo $group_year;
    }
}
