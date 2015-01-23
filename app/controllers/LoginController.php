<?php

class LoginController extends BaseController{

	public function __construct(){}

	//login get
	public function getIndex(){

		return View::make('login');
	}

	//post login
	public function postIndex(){

		$username = Input::get('username');
		$password = Input::get('password');

		//Authentication
		//goes to users table
		//login try
		$auth = Auth::attempt([
			'username' => $username,
			'password' => $password
		]);

		if($auth){
			return Redirect::to('/admin');
		}

	}

}

 ?>