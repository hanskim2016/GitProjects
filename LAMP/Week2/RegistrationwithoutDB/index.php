<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration without DB</title>
  </head>
  <body>
    <h1>Registration</h1>

    <?php
      session_start();


      if(isset($_SESSION['errors'])){
        foreach($_SESSION['errors'] as $error){
          echo $error . "<br><br>";

        }
      }

    ?>
    <form action="process.php" method="post">
      Email*: <input type="text" name="email"><br>
      First Name*: <input type="text" name="first_name"><br>
      Last Name*: <input type="text" name="last_name"><br>
      Password*: <input type="password" name="password"><br>
      Confirm Password*: <input type="password" name="confirm_password"><br>
      Birthdate: <input type="text" name="birth_date"><br>

      <input type="submit" value="Register">
    </form>
    <p>*Required inputs</p>

  </body>
</html>
