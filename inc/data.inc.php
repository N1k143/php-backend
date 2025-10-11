<?php 
setlocale(LC_ALL, "russian");
$now = new Datetime();
$day = $now->format('d');
$mon = $now->format('m');
$year = $now->format('Y');

$hour = (int) $now->format('h');
$welcome = '';

if($hour < 6){
  $welcome = 'Доброй ночи';
}elseif($hour >= 6 && $hour < 12){
  $welcome = 'Доброе утро';
}elseif($hour >= 12 && $hour < 18){
  $welcome = 'Добрый день';
}elseif($hour >= 18 && $hour < 23){
  $welcome = 'Добрый вечер';
}else {
  $welcome = 'Доброй ночи';
}
?>