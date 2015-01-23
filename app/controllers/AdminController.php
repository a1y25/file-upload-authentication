<?php

class AdminController extends BaseController{

	public function __construct(){
		return $this->beforeFilter('auth');
	}

	public function getIndex(){
		return View::make('admin');
	}

	public function postIndex(){}

}

 ?>