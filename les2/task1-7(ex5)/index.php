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
    case (0):
        echo 0 . "<br>";
    case (1):
        echo 1 . "<br>";
    case (2):
        echo 2 . "<br>";
    case (3):
        echo 3 . "<br>";
    case (4):
        echo 4 . "<br>";
    case (5):
        echo 5 . "<br>";
    case (6):
        echo 6 . "<br>";
    case (7):
        echo 7 . "<br>";
    case (8):
        echo 8 . "<br>";
    case (9):
        echo 9 . "<br>";
    case (10):
        echo 10 . "<br>";
    case (11):
        echo 11 . "<br>";
    case (12):
        echo 12 . "<br>";
    case (13):
        echo 13 . "<br>";
    case (14):
        echo 14 . "<br>";
    case (15):
        echo 15 . "<br>";
}

//task 3
$a = rand(1, 10);
$b = rand(1, 10);
echo "task 3: a = {$a}, b = {$b} <br>";

function add($x, $y){
    return $x + $y;
}
echo "сумма: " . add($a, $b) . "<br>";

function subtract($x, $y){
    return $x - $y;
}
echo "разность: " . subtract($a, $b) . "<br>";

function multiply($x, $y){
    return $x * $y;
}
echo "произведение: " . multiply($a, $b) . "<br>";

function divide($x, $y){
    return $x / $y;
}
echo "деление: " . divide($a, $b) . "<br>";

//task 4
echo "task 4 <br>";
function mathOperation($x, $y, $operation){
    switch ($operation){
        case ("сумма"):
            echo "сумма: " . add($x, $y);
            break;
        case ("разность"):
            echo "разность: " . subtract($x, $y);
            break;
        case ("произведение"):
            echo "произведение: " . multiply($x, $y);
            break;
        case ("деление"):
            echo "деление: " . divide($x, $y);
            break;
        default:
            echo "Неверные значения функции";
    }
}
mathOperation(3,5,'сумма');
mathOperation(3,5,'разность');
mathOperation(3,5,'произведение');
mathOperation(3,5,'деление');