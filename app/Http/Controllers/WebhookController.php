<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class WebhookController extends Controller {

	function __construct()
	{
		$this->middleware('guest');
	}

	function postHello(Request $request) 
	{

		$text = $request->getContent();;
		Log::info('Hello: '.$text);

		return ['success'=>true];
	}
	

}
