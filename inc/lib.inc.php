<?php 
  $cols = 5;
  $rows = 5;

  function drawTable($cols, $rows, $color) {
    echo "<table border='1' style='border-collapse: collapse; background-color: #f9f9f9;'>";
      for ($tr = 1; $tr <= $rows; $tr++) {
          echo "<tr>";
          for ($td = 1; $td <= $cols; $td++) {
              $value = $tr * $td;
              if ($tr == 1 || $td == 1) {
                  echo "<td style='font-weight: bold; text-align: center; background-color: $color;'>$value</td>";
              } else {
                  echo "<td style='padding:5px 10px;'>$value</td>";
              }
          }
          echo "</tr>";
        }
    echo "</table>";
  }

    function drawMenu($menu, $vertical = true){
    if($vertical){
      echo "<ul>";
    foreach($menu as $item): ?>
      <li><a href="<?=$item['href']?>"><?= $item['link']?></a></li>
    <?php endforeach;
      echo "</ul>";
    }else {
      echo "<ul style='list-style:none; padding:0; margin:0;'>";
          foreach($menu as $item): ?>
      <li style="display:inline; margin-right:15px;"><a href="<?=$item['href']?>"><?= $item['link']?></a></li>
    <?php endforeach;
      echo "</ul>";
    }
  }
  ?>

