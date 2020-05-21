<?php 
namespace App\Controllers;
//use App\Models\Contact;

class pages extends BaseController
{	
	
	public function __construct(){
		
	}

	public function index(){
		$data['data'] = $this->_contact->getdata();
		//return view('contacts/contact', $data);
		return view('pages/home', $data);
	}

	public function second($a,$b,$c){
		echo 'seconf '.$a.' '.$b.' '.$c;
	}

	public function home(){
		return view('pages/home');
	}

	public function contact(){
		return view('pages/contact');
	}

}
