<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
</head>
<body >
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/members.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css')}}">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      
      <a class="navbar-brand" href="{{route('club.home')}}">Club Manager</a>
    </div>

    
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
    </div>
  </div>
</nav>

<div class="container">
           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll_no</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

    @foreach($mem as $m)
      <tr>
        <td><b>{{$m->name}}</b></td>
        <td>{{$m->roll_no}}</td>
        <td>{{$m->email}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('.dropdown-toggle').dropdown();
    
       });
</script>
</body>
</html>