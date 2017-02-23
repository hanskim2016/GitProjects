<?php

session_start();
$errors = [];
var_dump($_POST);
//check to make sure that post action is set


//validate name. Name cannot have numbers, have to be a minimum length (2). etc. can't be EmptyIterator


//first and name length validation
if(strlen($_POST['first_name']) < 2 OR strlen($_POST['last_name']) < 2){
  array_unshift($errors, "First and/or last name input(s) must be at least 2 characters long. Please try again.");
}

//password length validation
if(strlen($_POST['password']) < 6 OR strlen($_POST['confirm_password']) < 6){
  array_unshift($errors, "Password(s) must be at least 6 characters long. Please try again.");
}

//Validate for alphabet only in first or last name
if(!ctype_alpha($_POST['first_name']) OR !ctype_alpha($_POST['last_name'])){
  //add error to error array
  array_unshift($errors, "Name input(s) must contain letters only. Please try again.");
}

//email validation
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  array_unshift($errors, "Email entry is not valid. Please try again.");
}

//password validation
if($_POST['password'] != $_POST['confirm_password'] ){
  array_unshift($errors, "Passwords do not match. Please try again");
}

// Input field not empty validation (all fields all together)
if(empty($_POST['first_name']) OR empty($_POST['last_name']) OR empty($_POST['email']) OR empty($_POST['password']) OR empty($_POST['confirm_password'])){
  array_unshift($errors, "One or more required input(s) not filled out. Please try again.");
}

//validate date in birthdate
if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_POST['birth_date'])){
  array_unshift($errors, "Please enter your birthdate in YYYY-MM-DD format using hyphens and try again.");

}


//If you don't have any errors recorded in $errors array, proceed to success.php, else get errors, store in session, and go back to index.php
if(empty($errors)){
  header("location: success.php");
} else {
  $_SESSION['errors'] = $errors;
  header("location: index.php");
}

?>
