<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style media="screen">
      .strong{
        font-weight: bold;
      }
      *{
        padding: 15px 15px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Thank you for your form submission! Your results are as below: </h1>
    <p class = 'strong'> Your name is: </p><?= $_POST['name'] ?>
    <p class = 'strong'>Your selected location: </p> <?= $_POST['dojoLocation'] ?>
    <p class = 'strong'>Your favorite programming language is: </p><?= $_POST['favoriteLanguage'] ?>
    <p class = 'strong'>Your comments: </p><?= $_POST['comments'] ?>


     <form action = "SurveyForm.php">
       <input type="submit" class="btn btn-primary" value="Go Back">
     </form>
  </body>
</html>

<?php
  // foreach($_POST as $value){
  //   echo $value . "<br>";
  // }
