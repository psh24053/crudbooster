<?php 
namespace App\Http\Controllers;

use DB;
use Session;
use Request;

class CBHook extends Controller {

	/*
	| --------------------------------------
	| Please note that you should re-login to see the session work
	| --------------------------------------
	|
	*/
	public function afterLogin() {
		
	}

    public function getLoginFilter($view){
        return $view;
    }

	public function validateLogin($email, $cmsUser){

	    return true;
    }
}