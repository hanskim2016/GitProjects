<!DOCTYPE html>
<style media="screen">

*{
  width: 500px;
}

div{
  width: 10px;
  height: 10px;
  padding: 1px;
  border: 1px solid black;
  float: left;
}

.color{
  background-color: <?php echo "purple" ?>;
}

</style>

<html>

<?php
  for($i = 0; $i < 1000; $i++){
    if($i % 2 == 0){
      echo "<div></div>";
    } else {
      echo "<div class = 'color'></div>";

    }
  }




 ?>



</html>
