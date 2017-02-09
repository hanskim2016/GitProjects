<!DOCTYPE html>


<?php

$handle = fopen("C:\MAMP\htdocs\us-500.csv", "r");
$data = fgetcsv($handle, 100, ",");
fclose($handle);

 ?>



<html>


<?php

$i = 0;

for($i = 0; $i < 100; $i++){
  echo $data[$i] . "<br>";
}


  // for($i = 0; $i < 10; $i++){
  //   for($data[$i]){
  //     echo $data[$i];
  //     // echo "First Name:" . $value . "<br>";
  //     // echo "Last Name:" . $value . "<br>";
  //     // echo "Company:" . $value . "<br>";
  //     // echo "Address:" . $value . "<br>";
  //     // echo "City:" . $value . "<br>";
  //     // echo "County:" . $value . "<br>";
  //     // echo "State:" . $value . "<br>";
  //     // echo "Zip Code:" . $value . "<br>";
  //     // echo "Phone 1:" . $value . "<br>";
  //     // echo "Phone 2:" . $value . "<br>";
  //     // echo "Email:" . $value . "<br>";
  //     // echo "Website:" . $value . "<br>";
  //   }
  //
  //
  // }
  //
  //

?>
</html>
