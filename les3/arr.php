<?php
//task 1
echo "task 1 <br>";
$i = 0;
while ($i <= 100){
    if ($i % 3 == 0){
        echo "{$i} ";
    }
    $i++;
}

//task 2
echo "<br> task 2 <br>";
$a = 0;
do {
    if ($a == 0 ){
        echo "{$a} - ноль ";
    } elseif ($a % 2 == 0){
        echo "{$a} - чётное число ";
    } else {
        echo "{$a} - нечётное число ";
    }
    $a++;
} while($a <= 10);

//task 3
echo '<br> task 3 <br>';
$regions = [
    "Московская область" => ['Москва', 'Химки', 'Одинцово', 'Клин'],
    "Ленинградская область" => ['Санкт-Петербург', 'Гатчина', 'Кронштадт', 'Шлиссельбург'],
    "Краснодарский край" => ['Краснодар', 'Геленджик', 'Анапа', 'Новороссийск']
];
foreach ($regions as $key => $region){
    echo $key . ":<br>";
    foreach ($region as $town){
        if ($town == end($region)){
           echo "{$town}. <br>";
        } else {
            echo "{$town}, ";
        }
    }
}