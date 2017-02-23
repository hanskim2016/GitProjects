
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <?php
    session_start();
    // echo $_SESSION['number'];
  ?>
  <body>
    <h1>Welcome to the Great Number Game!</h1>
    <h2>I am thinking of a number between 1 and 100 (inclusive). Take a guess!</h2>
    <h3><?= $_SESSION['message'] ?></h3>
    <form action="process.php" method="post">
      <div class="four columns">
        <input class="u-full-width" type="text" placeholder="Pick a number" name="userNumber">
      </div>
      <div class="four columns">
        <input type="hidden" name="action" value="submitNumber">
        <input class="button-primary" type="submit" value="Submit">
      </div>
    </form>
    <?php
      if($_SESSION['number'] == $_SESSION['userNumber']){
        ?>
        <form action="process.php" method="post">
          <div class="four columns">
            <input type="hidden" name="action" value="reset">
            <input class="button-primary" type="submit" value="Get a New Number" name="clear">
          </div>
        </form>
        <?php }?>
  </body>
</html>
