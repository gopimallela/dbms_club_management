<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body style="background-image: url('main6.jpg'); ">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/adminhome.css">
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<nav class="navbar navbar-inverse" style="opacity: 0.6; background-color: black;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="{{route('club.home')}}">Club Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
        <li><a href="/addmembers">Add Members</a></li>
        <li><a href="/addevents">Add Events</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/profile">Profile</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" style="opacity: 0.9">
<h1 class="page-header" style="color: white;">Hello Convenor, manage and explore your club</h1>
<div class="row">
<div class="col-md-6">
<div class="well">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Name</h3>
  </div>
  <div class="panel-body">
    {{Auth::user()->name}}
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Email</h3>
  </div>
  <div class="panel-body">
   {{Auth::user()->email}}
  </div>
</div>
<div class="row">
<div class="col-md-6">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Roll no</h3>
  </div>
  <div class="panel-body">
    {{Auth::user()->roll_no}}
  </div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Gender</h3>
  </div>
  <div class="panel-body">
    {{Auth::user()->gender}}
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Date of Birth</h3>
  </div>
  <div class="panel-body">
    {{Auth::user()->dob}}
  </div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Phone</h3>
  </div>
  <div class="panel-body">
    {{Auth::user()->phone}}
  </div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
  <div class="row">
	<div class="thumbnail">
 
  @foreach($logo as $l)
	<img src="{{asset($l->logo)}}">

	@endforeach
	</div>
  </div>
  
</div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('.dropdown-toggle').dropdown();
       });
</script>
</body>
</html>