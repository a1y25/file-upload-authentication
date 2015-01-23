<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	{{HTML::style('css/bootstrap.css')}}
	<!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> -->

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				{{Form::open(array('url'=>'/login', 'files'=>true))}}

				<div class="form-group">
					<label for="">username</label>
					<input type="text" class="form-control input-sm" name="username">
				</div>

				<div class="form-group">
					<label for="">password</label>
					<input type="text" class="form-control input-sm" name="password">
				</div>

				<button class="btn btn-sm btn-primary">Button</button>
			{{Form::close()}}
			</div>
		</div>
	</div>


</body>
</html>