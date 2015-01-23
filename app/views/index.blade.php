{{Form::open(array('url'=>'/upload', 'files'=>true))}}

	{{Form::file('image', array('class' => 'form-control'))}}

	{{Form::submit('Upload')}}
{{Form::close()}}