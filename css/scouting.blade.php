<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="google-signin-client_id" content="1030387548951-a46rkrfos2l46rtdttgb0riv0jifbr6v.apps.googleusercontent.com">

	<title>Team 1676 Scouting - @yield('title')</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  @extends('layouts.app')
	@section('topnavigationbar')
	<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="navbar">
      <!-- <a style="color:#ffcc00;margin-bottom:20px" class="navbar-brand" href="#">Scouting Navbar</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <img src="https://team1676.com/sites/default/files/larrysTempWebLogoSmall_0_0_1.png">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a style="color:#ffcc00;" class="nav-link" href="https://team1676.com/scouting" target="_blank">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a style="color:#ffcc00;" class="nav-link" href="https://www.firstinspires.org/robotics/frc" target="_blank">FRC Website</a>
          </li>
          <li class="nav-item">
            <a style="color:#ffcc00;" class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a style="color:#ffcc00;" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Team Links</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a style="color:#ffcc00;" class="dropdown-item" href="https://team1676.com/" target="_blank">Team 1676 Website</a>
              <a style="color:#ffcc00;" class="dropdown-item" href="https://team1676.com/dashboard" target="_blank">Dashboard</a>
              <a style="color:#ffcc00;" class="dropdown-item" href="https://team1676.com/calendar" target="_blank">Calendar</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    @show

  @section('bottomnavigationbar')
  <div class="navigationbar">
  <a href="#home" class="active">Home</a>
  <a href="#news" class="active">News</a>
  <a href="#contact" class="active">Contact</a>
  <a class="copyright" href="https://team1676.com/woof" target="_blank">Copyright © 2019, Team 1676 - The Pascack Pi-oneers.</a> 
  <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </div>
  @show

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>