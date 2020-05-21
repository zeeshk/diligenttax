<?php 
namespace App\Controllers;

class Home extends BaseController
{
	public function index(){
		$data['key']=[10,20];
		return view('contact');
	}

	public function second($a,$b,$c){
		echo 'seconf '.$a.' '.$b.' '.$c;
	}

}
