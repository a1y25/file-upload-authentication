<?php

class UploadController extends BaseController{

	public function getIndex(){

		return View::make('index');

	}

	public function postIndex(){
		$file = Input::file('image');

		$filename = date('Y-m-d-H-m-s').$file->getClientOriginalName();

		$file->move('attachments', $filename);

		Image::create([
			'filename'=> $filename
		]);

		var_dump('good uploaded and data recorded.....');

	}

}

 ?>