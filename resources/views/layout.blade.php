<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
	<script src="/css/bootstrap/js/jquery-2.1.4.js"></script>
	<script src="/css/bootstrap/js/bootstrap.min.js"></script>

</head>
  <div class="container" align="center">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        @if(!session('status'))
        <div class="navbar-header">
          <a class="navbar-brand" href="/login">
            <label style="font-family:"Comic Sans MS",Cursive,Sans-serif;"><font color="orange">Oyeh</font></label>
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/login"><span class="glyphicon glyphicon-user"></span>
            <label style="font-family:"Comic Sans MS",Cursive,Sans-serif;"><font color="orange">Login</font></label>
          </a></li>
        </ul>
        @else
          @if(session('status')==1)
          <div class="navbar-header">
            <a class="navbar-brand" href="/admin">
              <label style="font-family:"Comic Sans MS",Cursive,Sans-serif;"><font color="orange">Oyeh</font></label>
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span><font color="orange">{{session('username')}}</font></a></li>
            <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span><font color="orange"> Logout</font></a></li>
          </ul>
          @else
          <div class="navbar-header">
            <a class="navbar-brand" href="/login">
              <label style="font-family:"Comic Sans MS",Cursive,Sans-serif;"><font color="orange">Oyeh</font></label>
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/login"><span class="glyphicon glyphicon-user"></span>
              <label style="font-family:"Comic Sans MS",Cursive,Sans-serif;"><font color="orange">login</font></label>
            </a></li>
          </ul>
          @endif
        @endif
    </div>
    </nav>
    <body>
      @yield('content')
    </body>
  </div>
</html>
