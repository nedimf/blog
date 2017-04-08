<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
	public function welcome(){
		return view ('frontend.welcome');
	}

	public function php_view(){
		return view ('frontend.php_view');
	}

	public function pocetna_view(){
		return view ('frontend.pocetna');
	}
		public function clanak(){
		return view ('frontend.clanak1');
	}

    public function nameSet($ime){
    	$greeting = "Pozdrav, $ime";
    	return view ('frontend.head',compact("greeting"));

    }



}
