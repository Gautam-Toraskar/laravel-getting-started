<?php  

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// has to be named inorder to access the post class
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
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