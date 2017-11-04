<!DOCTYPE html>
<html>
<head>
  <title>Club info</title>
   
</head>
<body >
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/club.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css')}}">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
@foreach($club as $c)
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="{{route('club.home')}}">Club Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/filterevents/'.$c->abbrevation) }}">Events</a></li>
         <li><a href="{{ url('/members/'.$c->abbrevation) }}">Members</a></li>
        
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

<br>


<h1 class="text-center" style="color: white"><b>{{$c->name}}</b></h1>
<br>
<div class="container" style="opacity: 0.9">
<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">About</h3>
  </div>
  <div class="panel-body">
   <p>{{$c->description}}</p>
  </div>
</div>

</div>
<div class="col-md-6">
<img src="{{asset($c->logo)}}" class="thumbnail">
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




 