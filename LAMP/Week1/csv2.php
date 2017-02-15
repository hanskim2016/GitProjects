<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $row = 1;
      if (($handle = fopen("C:\MAMP\htdocs\us-500.csv", "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              ini_set('auto_detect_line_endings', TRUE);
              $num = count($data);
              echo "<p> $num fields in line $row: <br /></p>\n";
              $row++;
              for ($c=0; $c < $num; $c++) { ?>
                   <p> <?= $data[$c]; ?></p>
              <?php }
          }
          fclose($handle);
      }
      ?>

  </body>
</html>
