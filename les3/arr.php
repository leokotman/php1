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
//task 8
echo '<br> task 8 <br>';
foreach ($regions as $key => $region){
    echo $key . ":<br>";
    foreach ($region as $town){
        if (mb_str_split($town)[0] == 'К'){
            if ($town == end($region)){
                echo "{$town}. <br>";
            } else {
                echo "{$town}, ";
            }
        }
    }
}

//task 4
echo '<br> task 4 <br>';
function transliterate($str){
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
    $str = mb_strtolower($str);
    $result = strtr($str, $alfabet);
    $result= ucfirst($result);
    return $result;
}

echo transliterate("Строка для транслитерации, Привет мир!");


//task 5
echo '<br> task 5 <br>';

function replaceSpace($string){
    $string = str_replace(" ", "_", $string);
    return $string;
}
echo replaceSpace("Здесь пробелы заменятся на подчёркивания");

//task 6 - файл menu template
//task 7
echo '<br> task 7 <br>';
for ($i = 0; $i <= 9; print $i, $i++){};