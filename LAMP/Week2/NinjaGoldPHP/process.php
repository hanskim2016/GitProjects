<?php

  session_start();
  date_default_timezone_set('America/Los_Angeles');

  $_SESSION['place'] = $_POST['place'];
  $_SESSION['timestamp'] = date('l jS \of F Y h:i:s A');

  //switch statement for $_SESSION['place']; route to correct logic based on place value
  switch ($_SESSION['place']){
    case "cave":
      $_SESSION['earn'] = rand(5,10);
      break;

    case "house":
      $_SESSION['earn'] = rand(2,5);
      break;

    case "farm":
      $_SESSION['earn'] = rand(10,20);
      break;

    case "casino":
      $_SESSION['earn'] = rand(-50,50);
      break;

    case "reset":
      unset($_SESSION['gold']);
      unset($_SESSION['earn']);
      unset($_SESSION['activity_now']);
      unset($_SESSION['activities']);
      header('location: index.php');
      break;

    default:
      header('location: index.php');

  }

  $_SESSION['gold'] += $_SESSION['earn'];
  $activity_now = "You have earned " . $_SESSION['earn'] . " pieces of gold. (" . $_SESSION['timestamp'] . ")\n";
  array_unshift($_SESSION['activities'], $activity_now);
  // var_dump($_SESSION['activities']);

  //Populate activity text area with recent activities


  header('location: index.php');

?>
