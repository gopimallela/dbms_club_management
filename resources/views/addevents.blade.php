<!DOCTYPE html>
<html>
<head>
	<title>Add events</title>
</head>
<body style="background-image: url('table.jpg'); background-size: cover;">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/addevents.css">
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<nav class="navbar navbar-inverse">
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
    </div>
  </div>
</nav>
<h2 class="text-center">GO ON PUBLISH YOUR EVENTS HERE</h2>
<div class="container col-md-6 col-md-offset-3" style="opacity: 0.8;">
	<div class="">
		<form action="/addevents" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Enter the event name</label>
<i class="fa fa-envelope" aria-hidden="true"></i>

<input type="text" class="form-control" name="name">
</div>
<div class="form-group">
<label>Organiser</label>
<i class="fa fa-key" aria-hidden="true"></i>

<input type="text" class="form-control" name="organiser">
</div>
<div class="form-group">
<label>Event_id</label>
<i class="fa fa-key" aria-hidden="true"></i>

<input type="text" class="form-control" name="id">
</div>
<div class="form-group">
<label>Venue</label>
<i class="fa fa-key" aria-hidden="true"></i>

<input type="text" class="form-control" name="venue">
</div>
<div class="form-group">
<label>Description</label>
<i class="fa fa-key" aria-hidden="true"></i>

<input type="text" class="form-control" name="description">
</div>

<label> Poster </label>
<input type="file" name="poster" class="btn btn-primary">
<br>
<input type="hidden" name="_token" value="{{csrf_token()}} ">


<button type="submit" class="btn btn-success form-control">Add</button>
{{csrf_field()}}



</form>
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