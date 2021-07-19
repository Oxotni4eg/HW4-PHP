<?php

//Task-1

$str = 'london is the capital of great britain';
echo ucwords($str);

echo '<br />';

//Task-2

$str = 'html <b>css</b> php.';

$str = strip_tags($str);

$exp = explode(' ',$str);

echo $str;

echo '<br />';

echo '<pre>';
print_r($exp);
echo '</pre>';

echo '<br />';
//Task-3

$str = '1 2 3 4 5 6 7 123234 123 4341 9 10';
$str = str_shuffle($str);
echo $str;

echo '<br />';
//Task-4

date_default_timezone_set('Europe/Minsk');

$mounth = date("m");

switch ($mounth) {
    case '01':
    case '03':
    case '05':
    case '07':
    case '08':
    case '10':
    case '12':
        echo $mounth . ' - 31 день';
    break;

    case '02':
        echo $mounth . ' - 28 дней';
    break;

    default:
        echo $mounth . ' - 30 дней';
}

echo '<br />';

//task-5

$today = date("Y-m-d");
echo $today . '<br />';
$today = date("d.m.Y");
echo $today . '<br />';
$today = date("d.m.y");
echo $today . '<br />';
$today = date("H:i:s");
echo $today . '<br />';

//task-6

$date = date("Y-m-d");
$date = date("Y-m-d", strtotime('+2 day'));
echo $date . '<br/>';
$date = date("Y-m-d", strtotime('+1 month 3 day'));
echo $date . '<br/>';
$date = date("Y-m-d", strtotime('+1 year'));
echo $date . '<br/>';
$date = date("Y-m-d", strtotime('-3 day'));
echo $date . '<br/>';

//task-7

$str = '1a2b3c4b5d6e7f8g9h0';
$str = preg_replace('/\d/','',$str);
echo $str;
echo '<br />';

//Task-8

$arr = [4, -2, 5, 19, -130, 0, 10];
echo 'min = ' . min($arr) . '<br />';
echo 'max = ' . max($arr) . '<br />';

//Task-9

echo rand(0,100);
echo '<br />';


//Task-10

$arrDays = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье'
];

$day = date('D');
switch ($day) {
    case 'Mon': echo $arrDays[1];
    break;
    case 'Tue': echo $arrDays[2];
    break;
    case 'Wed': echo $arrDays[3];
    break;
    case 'Thu': echo $arrDays[4];
    break;
    case 'Fri': echo $arrDays[5];
    break;
    case 'Sat': echo $arrDays[6];
    break;
    case 'Sun': echo $arrDays[7];
    break;
}

echo '<br />';

//Task-11 - Возможно можно лучше сделать

$arr = [[1,2],[2,3],[4,5]];
$sum = 0;
foreach ($arr as list($a,$b)) {
    $sum +=$a;
    $sum +=$b;
}

echo $sum;

echo '<br />';

//Task-12 - как сделать лучше?

$arr = [1,1,1,2,2,2,3,3,3];
$in = $arr[0];
echo $arr[0] . ' ';
for ($i = 0; $i < count($arr) -1; $i++) {
    if ($arr[$i] != $arr[$i + 1]) echo $arr[$i+1] . ' ';
}

//Task-13 -- не понятно как делать правильно

$arr = [
    'index' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'catalog' => 'Catalog',
    'contacts' => 'Contacts'
];
$arr2 = array_keys($arr);
echo "
    <ul>
    <li><a href='$arr2[0].php'>$arr[index]</a></li>  
    <li><a href='$arr2[1].php'>$arr[about]</a></li>
    <li><a href='$arr2[2].php'>$arr[services]</a></li>
    <li><a href='$arr2[3].php'>$arr[catalog]</a></li>
    <li><a href='$arr2[4].php'>$arr[contacts]</a></li>
   </ul>
";
echo '<br />';

//Task-14

/*$n = 3;
echo '<div style="width: 100%; height: 100%; position: relative; background-color: black;">';
for ($i = 1; $i <= $n; $i++) {
    $a = rand(0,100);
    $b = rand(0,100);
    $c = rand(0,100);
    $d = rand(0,100);
    $x = rand(0,33);
    echo "<div style =\"width:{$x}%; height:{$x}%; background-color: red; position: absolute; right: {$a}%; left: {$b}%; top: {$c}%; bottom: {$d}%;\">";
}
echo '</div>';*/

echo '<br />';

//Task-15

$str = '1234567890';
$x = 1;
$arr = [];
while (strlen($str) != 0) {
    if ($x >= strlen($str)) {
        array_push($arr,$str);
        break;
    }
    $rest = substr($str,0,$x);
    array_push($arr,$rest);
    $str = ltrim($str,$rest);
    $x++;
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<br />';

//Task-16 --- есть ли функция для поиска с конца ?

$arr = [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2];

$key1 = array_search(0,$arr);
$key2 = 0;
$sum = 0;
for ($i = count($arr)-1; $i >= 0; $i--) {
    if ($arr[$i] == 0) {
        if ($key1 != $i) $key2 = $i;
        break;
    } else {
            $key2 = false;
        }
}
if (($key1 == false) || ($key2 == false)) {
    echo '0';
} else {
    for ($i = $key1; $i < $key2; $i++) {
        $sum += $arr[$i];
    }
    echo $sum;
}

echo '<br />';

//Task-17

// --- random

//Task-18

$str = '332 441 550';
$pattern = '/([0-9])\1/';
$str = preg_replace($pattern,'!',$str);

echo $str;

//Task-19
// на видео разбирали
//Task-20
// /^[\a-z]{1}[\w-\.]{2,}\@[\w-]+\.[a-z]{2,11}$/gi

