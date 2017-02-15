
<html>


<?php

$i = 0;
$count = 0;

for($i = 1; $i < 10; $i++){ ?>
  <h1>Record <?= $i ?></h1>

  <?php for($j = 0; $j < 12; $j++){
    ini_set('auto_detect_line_endings', TRUE);

    $handle = fopen("C:\MAMP\htdocs\us-500.csv", "r");
    $data = fgetcsv($handle, 500, ",");
    fclose($handle);?>
    <p><?= $data[$count]?><p>
    <?php $count++; ?>



  <?php } ?>


<?php } ?>



?>
</html>
