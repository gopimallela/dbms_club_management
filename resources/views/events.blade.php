<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
</head>
<body style="background-color: black; z-index: 0" >
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/events.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css')}}">
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

<h1 class="text-center" style="color: white"> Upcoming Events</h1>
<br>
@foreach($events as $event)
  <div class="row" style="z-index: 1">
    <div class="container">
    <div class="col-sm-6 col-md-6">
      <img src="{{asset($event->logo)}}" alt="Pieee">
      </div>
      <div class="caption" class="col-md-6">
        <h3><b>Name</b>:-{{$event->e_name}}</h3>
        <br>
        <h3><b>About</b>:-{{$event->description}}</h3>
        <br>
<h3><b>Convenor</b>:-{{$event->e_convenor}}</h3>
<br>
<h3><b>Venue</b>:-{{$event->venue}}</h3>
<br>
        <a href="{{ url('/eventregister/'.$event->e_name) }}" class="btn btn-success " role="button">Register</a>
       
      </div>
    
  </div>
  </div>
@endforeach


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('.dropdown-toggle').dropdown();
       });
</script>
</body>
</html>