<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
 </head>
 <body>
  <form action="№3.php">
    <p><label for="q1">Число N</label>
    <input type="text" name="n" id="q1"></p>
    <p><label for="q2">Число K</label>
    <input type="text" name="k" id="q2"></p>
    <p><button type="submit">Отправить форму</button></p>
  </form>
 </body>
</html>

<?php

$n = $_GET['n'];
$k = $_GET['k'];
$m = 0;

$a = [];

function qs($arr) { //сортировка quickSort
    if (count($arr) <= 1) {
        return $arr;
    } else {
        $dot = $arr[0];
        $left = [];
        $right = [];

        for ($i = 1; $i < count($arr); $i++) {
            if (strcasecmp($arr[$i], $dot) < 0) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }

        $result = array_merge(qs($left), array($dot), qs($right));
        return $result;
    }
} 

for ($i = 1; $i <= $n; $i++) { //заношу элементы от 1 до "n" и выражаю как строку
    $a[] = strval($i);
}

$sortedArr = qs($a); //вызываем функцию qs  с массивом 'a'
print_r($sortedArr); //выводим результат сортировки

$r = array_search($k, $sortedArr); //поиск значения в массиве
echo '<br/>';
print_r($r + 1); //номер индекса -1