<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet"  href="{{asset('assets/css/bootstrap.min.css')}}">


<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
    
         <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('accueil')}}"><span class="glyphicon glyphicon-user"></span> Se deconnecter</a></li>
      <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
    </ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

  
  </div>
</nav>
@yield('content')



<script src="{{ assets('assets/js/jquery.min.js')}}"  ></script>
<script src="{{ assets('assets/js/bootstrap.min.js')}}"  ></script>
</body>
</html>