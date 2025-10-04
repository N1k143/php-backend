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
  ?>

<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
        <style>
        table {
            border-collapse: collapse;
            background-color: #f9f9f9; /* фон таблицы */
        }
        td {
            border: 1px solid #000;
            padding: 5px 10px;
        }
        .header {
            font-weight: bold;
            text-align: center;
            background-color: #00dc79ff; /* зелёный оттенок для шапки */
        }
    </style>
  <link rel="stylesheet" href="style.css" />

</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
        <?php drawTable(6, 6, "#ffd966") ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>