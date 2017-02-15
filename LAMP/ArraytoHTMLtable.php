<!DOCTYPE html>
<style media="screen">

  *{
    text-align: left;
    border: 1px solid black;
    padding: 5px;

  }

</style>

<?php

$users = array(
 array('first_name' => 'Test', 'last_name' => 'Test'),
 array('first_name' => 'Michael', 'last_name' => 'Choi'),
 array('first_name' => 'John', 'last_name' => 'Supsupin'),
 array('first_name' => 'Mark', 'last_name' => 'Guillen'),
 array('first_name' => 'KB', 'last_name' => 'Tonel')
);
?>

<html>
  <table>
    <tr>
      <th><strong>User ID</strong></th>
      <th><strong>First Name</strong></th>
      <th><strong>Last Name</strong></th>
      <th><strong>Full Name</strong></th>
      <th><strong>Full Name in upper case</strong></th>
      <th><strong>Length of full name</strong></th>
    </tr>
    <tr>
      <?php
        for($i = 1; $i < count($users); $i++){
          echo "<tr>";
          echo "<td>" . $i . "</td>";

          foreach($users[$i] as $values){
            echo "<td>" . $values . "</td>";

          }
          echo "<td>". $users[$i]['first_name'] . " ". $users[$i]['last_name'] ."</td>";
          echo "<td>". strtoupper($users[$i]['first_name']) . " ". strtoupper($users[$i]['last_name']) ."</td>";

          $name_length = strval((strlen($users[$i]['first_name']) + strlen($users[$i]['last_name'])));

          echo "<td>" . $name_length . "</td>";

          echo "<tr>";
        }
      ?>
    </tr>



  </table>
</html>
