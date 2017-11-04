<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/register.css">


</head>
<body style="background-image: url('main.jpg'); background-size: cover;">
<h1 class="text-center title">SIGN UP</h1>
<br>
<div class="container" style="opacity: 0.9">
<div class="row">
<div class="col-md-9 col-md-offset-1">
<div class="welsl">


@if(count($errors)>0)
	
	@foreach($errors->all() as $error)
	<div class="alert alert-danger">
	<p>{{ $error }} </p>
	</div>
	@endforeach
	@endif
<form class="form-horizontal" action="/register" method="post">
<div class="form-group">
<label class="col-md-3 text-center ">Name <i class="fa fa-user" aria-hidden="true"></i></label>

<div class="col-md-7">
<input type="text" class="form-control" name="name">
</div></div>
<div class="form-group">
<label class="col-md-3 text-center ">Roll no <i class="fa fa-id-card" aria-hidden="true"></i></label>

<div class="col-md-7">
<input type="text" class="form-control" name="roll">
</div>
</div>
<div class="form-group">
<label class="col-md-3 text-center ">Email <i class="fa fa-envelope" aria-hidden="true"></i></label>

<div class="col-md-7">
<input type="email" class="form-control" name="email">
</div>
</div>
<div class="form-group">
<label class="col-md-3 text-center ">Password <i class="fa fa-key" aria-hidden="true"></i></label>

<div class="col-md-7">
<input type="password" class="form-control" name="password">
</div>
</div>
<div class="form-group">
<label class="col-md-3 text-left ">Retype Password <i class="fa fa-key" aria-hidden="true"></i></label>

<div class="col-md-7">
<input type="password" class="form-control" name="repassword">
</div>
</div>

<div class="form-group">
<label class="col-md-3 text-center ">Gender:</label>
<div class="col-md-7">
<label class="radio-inline">
<input type="radio" name="gender" id="gender1" value="male" >Male
</label>
<label class="radio-inline">
<input type="radio" name="gender" id="gender2" value="female" >Female
</label>
</div>

</div>
<div class="form-group">
<label  class="col-md-3 text-center " for="dob" >DOB <i class="fa fa-calendar" aria-hidden="true"></i></label>
<div class="col-md-7">
<input type="text" name="dob" class="form-control datepicker" id="dob" placeholder="MM/DD/YYYY" name="dob">
</div>
</div>
<div class="form-group">
<label for="" class="col-md-3 text-center" >Phone no <i class="fa fa-mobile" aria-hidden="true"></i></label>
<div class="col-md-7">
<input type="text" class="form-control "  placeholder=" 10 digits" name="phone">
</div>
</div>
<br>
<div class="col-md-4 col-md-offset-4">
 <button type="submit" class="btn btn-success form-control">Register</button></div>
{{csrf_field()}}
</form>
</div>  
</div>
</div>
</div>
<script src="https://use.fontawesome.com/0dfb9cfefa.js"></script>
</body>
</html>