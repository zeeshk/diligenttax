<?php 
namespace App\Controllers;
use App\Models\Contact;

class ContactController extends BaseController
{	
	private $_contact;
	
	public function __construct(){
		$this->_contact = new Contact();
	}

	public function index(){
		$data['data'] = $this->_contact->getdata();
		//return view('contacts/contact', $data);
		return view('pages/home', $data);
	}

	public function second($a,$b,$c){
		echo 'seconf '.$a.' '.$b.' '.$c;
	}

	public function submit(){
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$post_data =  $request->getRawInput();
		//print_r($post_data);exit;
		$session->set('thank_msg', '1');
		return redirect()->back();
		//return view('pages/contact');
	}

}
