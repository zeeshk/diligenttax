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
		
		$to = "zeeshan.sask@gmail.com, shabbiribnephiroze@gmail.com";
		$subject = "Enquiry";

		$message = "
		<html>
			<head>
				<title>HTML email</title>
			</head>
			<body>
				<p>This email contains HTML Tags!</p>
				<table>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
				</tr>
				<tr>
					<td>John</td>
					<td>Doe</td>
				</tr>
				</table>
			</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <diligenttax@diligenttaxservices.in>' . "\r\n";
		$headers .= 'Cc: myboss@example.com' . "\r\n";

		mail($to,$subject,$message,$headers);

		$session->set('thank_msg', '1');
		return redirect()->back();
		//return view('pages/contact');
	}

}
