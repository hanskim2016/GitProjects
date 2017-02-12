<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form 1.0</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    body {
      padding-top: 50px;

    }
    .starter-template {
      padding: 40px 15px;
      text-align: center;
    }

    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="starter-template">
        <h1>Survey Form</h1>
        <p class="lead">Welcome to Coding Dojo! </p>
        <form action = "process.php" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Your preferred Dojo location</label>
            <select class="form-control" name="dojoLocation">
              <option>Seattle</option>
              <option>Los Angeles</option>
              <option>Tokyo</option>
              <option>Seoul</option>
              <option>London</option>
            </select>
          </div>

        <div class="form-group">
          <label for="exampleSelect1">Your favorite programming language</label>
          <select class="form-control" name="favoriteLanguage">
            <option>Python</option>
            <option>JavaScript</option>
            <option>Ruby</option>
            <option>iOS/Swift</option>
            <option>Java</option>
            <option>PHP</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleTextarea">Comments</label>
          <textarea class="form-control" name="comments" rows="3"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
      </form>




      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>
