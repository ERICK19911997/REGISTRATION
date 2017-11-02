<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Video;
use App\User;

class Erick extends Controller
{

	public function __construct() {
		$this->middleware('auth')->except(['index', 'authenticate', 'qn', ]);
	}

	//pub;ic function __construct()
    public function index() {
    	return view('login', [
    		'status' => '',
    	]);
    }

    public function authenticate(Request $request) {
    	$username = $request->input('username');
    	$password = $request->input('password');
    	if(Auth::attempt(['username' => $username, 'password' => $password, ])) {
    		$request->session()->regenerate();
    		return redirect()->route('home');
    	} else {
    		return view('login')->with('status', 'Wrong username or password');
    		//return $status = 'Wrong username or password';
    	}
    }

    public function home() {
			$videos = Video::orderBy('id', 'desc')->get();
    	return view('home')->with('videos', $videos);
    }

		public function video($id) {
			$video = Video::find($id);
			return view('video')->with('video', $video);
		}

		public function store(Request $request) {
			Video::create($request->all());
			return redirect()->route('home');
		}

		public function update(Request $request) {
			$id = $request->input('id');
			Video::where('id', $id)->update($request->all());
			return redirect()->route('home');
		}

		public function delete(Request $request) {
			Video::where('id', $request->input('id'))->delete();//softly deleted
			return redirect()->route('home');
		}

    public function logout(Request $request) {
    	Auth::logout();
    	$request->session()->invalidate();
    	return redirect()->route('login');
    }
    public function register(){
    return view('register');

    }
    
     
     
}
