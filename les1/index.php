<?php
//echo "Hello, world!";

// $name = 'Leo';
// echo "Hello, {$name!}";

// define('MY_CONST', 1000);
// echo MY_CONST;

// $int10 = 42;
// $int2 = 0b101010;
// $int8 = 052;
// $int16 = 0x2A;
// //выведет везде 42
// echo "Десятеричная система {$int10} <br>";
// echo "Двоичная система {$int2} <br>";
// echo "Восьмеричная система {$int8} <br>";
// echo "Шестнадцетеричная система {$int16} <br>";

// $precise1 = 1.5;
// $precise2 = 1.5e4;
// $precise3 = 6E-8;
// echo "{$precise1} | {$precise2} | {$precise3}";

// $a = 1;
// echo "$a";
// echo '$a';

// $a = 10;
// $b = (boolean) $b;
// var_dump($a, $b);

// $a = 'Hello, ';
// $b = 'world';
// $c = $a . $b;
// echo $c;

// $a = 5;
// $b = 4;
// echo "сложение " . ($a + $b) . " <br>";
// echo "умножение " . ($a * $b) . " <br>";
// echo "вычитание " . ($a - $b) . " <br>";
// echo "деление " . ($a / $b) . " <br>";
// echo "остаток от деления " . ($a % $b) . " <br>";
// echo "возведение в степень " . ($a ** $b) . " <br>";

// $a = 4;
// $b = 5;
// $a += $b;

// echo "постинкремент ". $a++ . "<br>";
// echo "преинкремент ". ++$a . "<br>";
// echo "постдекремент ". $a-- . "<br>";
// echo "предекремент ". --$a . "<br>";
// echo 'a = ' . $a;

// $a = 4;
// $b = 5;
// var_dump($a == $b);  // Сравнение по значению
// var_dump($a === $b); // Сравнение по значению и типу
// var_dump($a > $b);    // Больше
// var_dump($a < $b);    // Меньше
// var_dump($a <> $b);  // Не равно
// var_dump($a != $b);   // Не равно
// var_dump($a !== $b); // Не равно без приведения типов
// var_dump($a <= $b);  // Меньше или равно
// var_dump($a >= $b);  // Больше или равно

$a = 5;
$b = '05';
var_dump($a == $b); // Почему true?
//здесь происходит неявное преобразование типа, не строгое сравнение. $b становится числом и сравнивается с $a

var_dump((int)'012345'); // Почему 12345?
//не уверен, но возможно потому что 0 не является целым числом, и преобразователь пропускает его

var_dump((float)123.0 === (int)123.0); // Почему false?
// потому что здесь строгое сравнение по типам - здесь разные типы (дробное, целое) после приведения

var_dump((int)0 === (int)'hello, world'); // Почему true?
//потому что после приведения типов получается true с обеих сторон (int 0)
?>