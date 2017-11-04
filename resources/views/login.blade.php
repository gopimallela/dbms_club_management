<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/login.css">





</head>

<body style="background-image: url('main.jpg'); background-size: cover;">
<br>

<h1 class="title text-center" style="color: black;">CLUB MANAGER </h1>
<br>
<br>




<div class="row" style="opacity: 0.9">
<div class="col-md-4 col-md-offset-4">
<div class="well">
<form action="/" method="post">
<div class="form-group">
<label>Email</label>
<i class="fa fa-envelope" aria-hidden="true"></i>

<input type="email" class="form-control" name="email">
</div>
<div class="form-group">
<label>Password</label>
<i class="fa fa-key" aria-hidden="true"></i>

<input type="password" class="form-control" name="password">
</div>


<button type="submit" class="btn btn-success form-control">Login</button>
{{csrf_field()}}

</form>
@if(count($errors)>0)
	<div class="alert alert-danger">
	@foreach($errors->all() as $error)
	<p>{{ $error }} </p>
	@endforeach
	</div>
@endif
</div>

<div class="well register">
<p class="text-center small">Haven't registered yet</p>
<a href="/register"><button type="submit" class="btn btn-primary form-control">Register</button></a>
</div>
</div>
</div>
<script src="https://use.fontawesome.com/0dfb9cfefa.js"></script>

</body>
</html>
