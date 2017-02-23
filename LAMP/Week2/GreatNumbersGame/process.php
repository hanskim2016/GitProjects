<?php
  session_start();
//Take user guess from post and store in session, because we need to carry it through to result.php
  $_SESSION['userNumber'] = $_POST['userNumber'];

//If someone stumbles upon process.php directly, assign random value and redirect to index.php
  if(!isset($_SESSION['number']) ){
    $_SESSION['number'] = rand(1,100);
    header('Location: index.php');
  }

//Reset the random number to guess. Triggered through hidden input value on result.php reset form button
//Die() discontinues rest of code after line 21
  if($_POST['action'] == "reset"){
    empty($_SESSION);
    $_SESSION['number'] = rand(1,100);
    header('Location: index.php');
    die();
  }

//Depending on logic, store appropriate user messaging in session['message']. To be used in result.php
  if($_SESSION['userNumber'] > $_SESSION['number']){
    $_SESSION['message'] = "Your number is too large";
    header('Location: result.php');
  } else if ($_SESSION['userNumber'] < $_SESSION['number']){
    $_SESSION['message'] = "Your number is too small";
    header('Location: result.php');
  } else {
    $_SESSION['message'] = "You guessed the right number!";
    header('Location: result.php');
  }

?>
