

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CSclub@jacobs Student Registration</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Custom styles for this website -->
    <link href="jcsclub.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-gradient">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">CSclub@Jacobs </a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="studentRegistration.php">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eventRegistration.php">Event</a>
          </li>
        </ul>
        <ul class="nav navbar-nav float-xs-right">
          <li class="nav-item">
            <a class="nav-link" href="">
              <img height="24" width="24" src="https://upload.wikimedia.org/wikipedia/commons/7/76/Slack_Icon.png"/>
              Slack
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/jacobsCSclub">
              <img height="24" width="24" src="http://www.freeiconspng.com/uploads/github-logo-icon-2.png"/>
              Github
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <div class="container">

      <div class="header" id="registration">
        <h1>Student Registration </h1>
        <h5 class="text-muted">Enter your details for registration for the club</h5>
      </div>

<div class="container" align="center">
<table>
<form action="includes/studentreg.inc.php" method="POST" >
<tr>
<td>FULL NAME:</td>
<td><input type="text" name="studentname" placeholder="Full Name"></td>
</tr>
<tr>
<td>PASSWORD:</td>
<td><input type="password" name="studentpassword" placeholder="Password"></td>
</tr>
<tr>
<td>AGE:</td>
<td><input type="number" name="studentage" placeholder="Age"></td>
</tr>
<tr>
<td>GENDER:</td>
<td><input type="text" name="studentgender" placeholder="Gender"></td>
</tr>
<tr>
<td>MAJOR:</td>
<td><input type="text" name="studentmajor" placeholder="Major"></td>
</tr>
<tr>
<td>
<input type="submit" class="btn btn-primary" name="submit">


</td>
</tr>
</form>

</table>

    
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

      <div class="button-bar">
        <a href="https://csclubjacobs.slack.com">
        <button class="button-box">
          Join our Slack
        </button>
        </a>
        <a href="https://github.com/jacobsCSclub">
          <button class="button-box pulse">
            Join our GitHub
          </button>
        </a>
      </div>
      <div class="button-bar">
        <img height="24" width="24" src="https://upload.wikimedia.org/wikipedia/commons/7/76/Slack_Icon.png" />
        <img height="24" width="24" src="http://www.freeiconspng.com/uploads/github-logo-icon-2.png" />

      </div>

      <hr class="featurette-divider">

      <div class="container section">

        <div class="row featurette">
          <div class="col-md-5">
            <i class="material-icons" style="font-size: 192px">build</i>
          </div>
          <div class="col-md-7">
            <h2 class="featurette-heading">Site under development.</h2>
            <p class="lead">Looking to help out? Want to get a start on web development? Help us build this website on <a href="https://github.com/jacobsCSclub">GitHub</a>.</p>
          </div>
        </div>

        <br />
        <br />

        <footer>
          <p class="float-right"><a href="#">Go to top</a></p>

          <p>&copy; 2018, CSclub@Jacobs</p>
          
          <p class = "my-imprint"><a href= "imprint.html" target="_self"> Imprint</a></p>
        </footer>

      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
     $(document).ready(function () {
       $(".button-box").mouseenter(function(event) {
         $(this).addClass("animated infinite tada");
       });
       $(".button-box").mouseleave(function(event) {
         $(this).removeClass("animated infinite tada");
       });
     });
    </script>

  </body>
</html>
