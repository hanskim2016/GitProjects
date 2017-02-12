

<style media="screen">
  .strong{
    font-weight: bold;
  }
</style>
<?php
  // foreach($_POST as $value){
  //   echo $value . "<br>";
  // }

echo "Thank you for your form submission! Your results are as below.";
echo "<p class = 'strong'> Your name is: " . $_POST['name'] . "<p>";
echo "<p> Your selected location: " . $_POST['dojoLocation'] . "<p>";
echo "<p>Your favorite programming language is: " . $_POST['favoriteLanguage'] . "<p>";
echo "<p>Your comments: " . $_POST['comments'] . "<p>";

 ?>
