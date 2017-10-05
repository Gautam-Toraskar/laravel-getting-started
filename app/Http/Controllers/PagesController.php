<?php  

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages/welcome');
	}

	public function getAbout() {
		$first = "Radha";
		$last = "Krishna";

		$full = $first . " " . $last;
		$email = "gtmtoraskar@gmail.com";

		// traditional return statement
		// return view('pages/about')->with("fullname", $full);
		
		// with some shortcut
		// return view('pages/about')->withFullname($full);
		
		// passing multiple parameters
		// return view('pages/about')->withFullname($full)->withEmail($email);

		// passing an array
		$data = [];
		$data["email"] = $email;
		$data["fullname"] = $full;
		return view("pages.about")->withData($data);
		// in view withFullname is referred as $fullname

	}

	public function getContact() {
		// return "hello contact pages";
		return view('pages/contact');
	}
	
	/*to submit the form data*/
	public function postContact() {


	}
}

?>