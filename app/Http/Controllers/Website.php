<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Input;
use Response;
use Redirect;
use View;
use App;
use Session;
use Datetime;
use Lang;
use Mail;
use Config;
use Validator;
use Cache;
use Paypalpayment;
use PaymentService;
use Auth;
use QrCode;
use Request;
use Util;

class Website extends Controller
{
	
		
    public function index()
    {
		$url="https://experienciasxcaret.github.io/Developers/api/front.json";
		
		$data=(object)Util::getXcaretData($url);
			
		if(!isset($data->id)){
			$data["error"]=true;
		}
		
		
		return View::make('welcome',['data'=>$data]);
		
		
    }	 	 
	

	 
    

	
	
	
	
	 
}//end of class
