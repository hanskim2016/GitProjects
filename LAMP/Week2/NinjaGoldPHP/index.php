<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Ninja Gold PHP 1.0</title>
  </head>
  <?php
    session_start();
    if(!isset($_SESSION['gold'])){
      $_SESSION['gold'] = 0;
    }
    if(!isset($_SESSION['activities'])){
      $_SESSION['activities'] = [];
    }
  ?>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ninja Gold PHP 1.0</a>
        </div>
      </div>
    </nav>

    <!-- Green and red alerts for earn gold. If earn is not set, skip-->
    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
      </div>
      <div id="alerts">
        <?php if(isset($_SESSION['earn'])){
          if($_SESSION['earn'] >= 0){ ?>
          <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> You successfully earned <?= $_SESSION['earn']; ?> gold pieces.
          </div>

          <?php } else { ?>
          <div class="alert alert-danger" role="alert">
            <strong>Uh oh!</strong> Looks like you lost <?= $_SESSION['earn']; ?> gold pieces. Try again.
          </div>
          <?php }
        } ?>
      </div>
    </div>

<!-- Below items are gold earning options, activity monitoring well section, and the reset game button -->
    <div class='container' id="mainbody">
      <div id="gold_counter">
        <h4>Gold: <span class="badge"><?= $_SESSION['gold']; ?></span></h4>
      </div>
      <div id="goldOptions">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Farm</h3>
          </div>
          <div class="panel-body">
            <p>(earns 10-20 gold)</p>
            <form action="process.php" method="post">
              <input type="hidden" name="place" value="farm" />
              <input type="submit" class="btn btn-primary" value="Find Gold!"></button>
            </form>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Cave</h3>
          </div>
          <div class="panel-body">
            <p>(earns 5-10 gold)</p>
            <form action="process.php" method="post">
              <input type="hidden" name="place" value="cave">
              <input type="submit" class="btn btn-primary" value="Find Gold!"></button>
            </form>
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">House</h3>
          </div>
          <div class="panel-body">
            <p>(earns 2-5 gold)</p>
            <form action="process.php" method="post">
              <input type="hidden" name="place" value="house">
              <input type="submit" class="btn btn-primary" value="Find Gold!"></button>
            </form>
          </div>
        </div>
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">Casino</h3>
          </div>
          <div class="panel-body">
            <p>(earns or loses up to 50 gold)</p>
            <form action="process.php" method="post">
              <input type="hidden" name="place" value="casino">
              <input type="submit" class="btn btn-primary" value="Find Gold!"></button>
            </form>
          </div>
        </div>
        <div class="well">
          <p>Your activity:</p>
            <?php
              foreach($_SESSION['activities'] as $value){ ?>
                <p><?= $value; ?></p>
              <?php } ?>
        </div>
        <form action="process.php" method="post">
          <input type="hidden" name="place" value="reset">
          <input type="submit" class="btn btn-lg btn-warning" value="Reset the game">
        </form>
      </div><!--End div id gold options-->
    </div> <!--End div container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
