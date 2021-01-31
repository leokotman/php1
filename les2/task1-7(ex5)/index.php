<?php
//task 1
echo "task 1 <br>";
$a = rand(-10, 10);
$b = rand(-10, 10);
echo $a, $b, "<br>";
if ($a >= 0 && $b >= 0){
    echo $a - $b;
} elseif ($a < 0 && $b < 0){
    echo $a * $b;
} else {
    echo $a + $b;
}

echo "<br>";


//task 2
echo "task 2 <br>";
$a = random_int(0, 15);
switch ($a){
    case 0:
        echo $a++ . "<br>";
    case 1:
        echo $a++ . "<br>";
    case 2:
        echo $a++ . "<br>";
    case 3:
        echo $a++ . "<br>";
    case 4:
        echo $a++ . "<br>";
    case 5:
        echo $a++ . "<br>";
    case 6:
        echo $a++ . "<br>";
    case 7:
        echo $a++ . "<br>";
    case 8:
        echo $a++ . "<br>";
    case 9:
        echo $a++ . "<br>";
    case 10:
        echo $a++ . "<br>";
    case 11:
        echo $a++ . "<br>";
    case 12:
        echo $a++ . "<br>";
    case 13:
        echo $a++ . "<br>";
    case 14:
        echo $a++ . "<br>";
    case 15:
        echo $a++ . "<br>";
}

//task 3
$a = rand(0, 10);
$b = rand(0, 10);
echo "task 3: a = {$a}, b = {$b} <br>";

function add($x, $y){
    return $x + $y;
}
function subtract($x, $y){
    return $x - $y;
}
function multiply($x, $y){
    return $x * $y;
}
function divide($x, $y){
    if ($y != 0){
        return $x / $y;
    } else {
        return '"Ошибка: на ноль делить нельзя"';
    }

}
echo "сумма: " . add($a, $b) . "<br>";

echo "разность: " . subtract($a, $b) . "<br>";

echo "произведение: " . multiply($a, $b) . "<br>";

echo "деление: " . divide($a, $b) . "<br>";

//task 4
echo "task 4 <br>";
function mathOperation($x, $y, $operation){
    switch ($operation){
        case "сумма":
            return add($x, $y);
        case "разность":
            return subtract($x, $y);
        case "произведение":
            return multiply($x, $y);
        case "деление":
            return divide($x, $y);
        default:
            return "Неверные значения функции";
    }
}
echo "сумма: " . mathOperation(3,5,'сумма') . "<br>";
echo "разность: " . mathOperation(3,5,'разность') . "<br>";
echo "произведение: " . mathOperation(3,5,'произведение') . "<br>";
echo "деление: " . mathOperation(3,5,'деление') . "<br>";

//task 6
echo "task 6 <br>";
function power($val, $pow){
    if ($pow == 0){
        return 1;
    } elseif ($pow == 1){
        return $val;
    } else {
        return $val * power($val, $pow - 1);
    }
}
echo power(3,3) . "<br>";

//task 7
echo "task 7 <br>";
function currentTime(){
    $hours = date("H");
    $minutes = date("i");
    $time = "";
    if ($hours == 0 || ($hours >= 5 && $hours <= 20)){
        $time .= $hours . " часов ";
    } elseif ($hours == 1 || $hours == 21){
        $time .= "\$hours час ";
    } else {
        $time .= $hours . " часа ";
    }
    if ($minutes == 1 || ($minutes > 20 && $minutes%10 == 1)){
        $time .= $minutes . " минута ";
    } elseif (($minutes >=2 && $minutes <= 4) ||
        ($minutes > 20 && ($minutes%10 == 2 || $minutes%10 == 3 || $minutes%10 == 4))){
        $time .= $minutes . " минуты ";
    } else {
        $time .= $minutes . " минут ";
    }
    return $time;
}
var_dump("Текущее время (по серверу): " . currentTime());