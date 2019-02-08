<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="google-signin-client_id" content="1030387548951-a46rkrfos2l46rtdttgb0riv0jifbr6v.apps.googleusercontent.com">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <title>@yield('title')</title>

  <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="navbar">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <a class="nav-link" href="https://scouting.team1676.com" target="_blank"><img class="img-fluid navbar-image" src="resources/pioneers-logo.png"></a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://scouting.team1676.com/scout.html">Scout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://scouting.team1676.com/superscout.html">Superscout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://scouting.team1676.com/rawdata.html">Rawdata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://scouting.team1676.com/teams.html">Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://scouting.team1676.com/userdata.php">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://scouting.team1676.com/logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="resources/js/bootstrap.min.js"></script>
  <script src="resources/js/script.js"></script>
  @yield('custom_scripts')
  </body>
</html>
