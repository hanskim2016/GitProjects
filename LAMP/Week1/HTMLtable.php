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
      <?php
        for($i = 0; $i < count($users); $i++){ ?>
          <tr>
            <td> <?= $i+1 ?> </td>
            <?php foreach($users[$i] as $values){ ?>
            <td><?= $values ?> </td>
            <?php } ?>
            <td><?= $users[$i]['first_name'] . " " . $users[$i]['last_name'] ?></td>
            <td><?= strtoupper($users[$i]['first_name']) . " ". strtoupper($users[$i]['last_name']) ?></td>
            <?php $name_length = strval((strlen($users[$i]['first_name']) + strlen($users[$i]['last_name']))) ?>
            <td><?= $name_length ?></td>
          </tr>
      <?php }?>
  </table>
</html>
