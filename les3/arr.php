<?php
//phpinfo();
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

//task 4
echo '<br> task 4 <br>';
$alfabet = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];

//строка -> разбить на массив -> перебрать массив
// -> если значение массива строки = ключу массива алфавита ->
//заменить значение строки значением из алфавита
// -> соединить массив в строку

$my_string = "Строка для транслитерации";
$my_string_split = mb_str_split($my_string);
var_dump($my_string_split);

//$new_string = array();
//
//foreach ($my_string_split as $key => $literal){
//    if (array_key_exists($literal, $alfabet)){
//        array_push($new_string, $alfabet[$literal]);
//    } elseif ($literal == ' '){
//        array_push($new_string, ' ');
//    }
//    return $new_string;
//}
//
//var_dump($new_string);

//task 5
echo '<br> task 5 <br>';

function replaceSpace($string){
    $string = str_replace(" ", "_", $string);
    return $string;
}
echo replaceSpace("Здесь пробелы заменятся на подчёркивания");

//task 6
echo '<br> task 6 <br>';
