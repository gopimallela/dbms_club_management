<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="css/home.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="background-color:#252526;">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  <nav>
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="/profile">Profile</a></li>
  
  <li class="divider"></li>
  <li><a href="/logout">Logout</a></li>
</ul>
    <div class="nav-wrapper" style="background-color: #0b2247">
      <a href="{{route('club.home')}}" class="brand-logo">Club Manager</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/events">Events</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
  <h1 class="center-align heading">Tech Clubs</h1>
  <div class="container">
      <div class="carousel">
      @foreach($Tclubs as $club)
      
      <a class="carousel-item" href="{{ url('/club/'.$club->abbrevation) }}"><img src="{{$club->logo}}"></a>
     
      @endforeach
    </div>
  </div>

   <h1 class="center-align heading">Cultural Clubs</h1>
  <div class="container">
      <div class="carousel">
      @foreach($Cclubs as $club)
      <a class="carousel-item" href="{{ url('/club/'.$club->abbrevation) }}"><img src="{{$club->logo}}"></a>
      @endforeach
    </div>
  </div>


  <script type="text/javascript">
 
      $(document).ready(function(){
    $('.carousel').carousel();
       });
  </script>

  </body>
</html>