<pre>
<?php

//массив


$animals = ["leo", "dog", "cat", "rabbit", "wolf"];
// вывод значения второга элемента
echo $animals[2] . "\n";
// меняю значение третьего элемента на другое значение
$animals[3] = "fox" . "\n";
// вывод количества элементов массива
echo count($animals) . "\n";
// вывод всего массивы через print_r
print_r($animals) . "\n";
// удаление последнего элемента 
array_pop($animals);
print_r($animals) . "\n"; 




// цикл for

for ($i = 0; $i <= 100; $i++) {
    echo "Я пишу на PHP" . "\n";
};

for ($i = 0; $i <= 100; $i++) {
    echo $i . " Я пишу на PHP" . "\n";
}; 


for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo $i . " Hello, PHP" . "\n";
    } else {
        echo $i . " Я пишу на PHP" . "\n";
    }
};




// цикл while 

$i = 1; 
while($i <= 100) {
    echo "Я пишу на PHP" . "\n";
    $i++;
};

$i = 1; 
while($i <= 100) {
    echo $i . " Я пишу на PHP" . "\n";
    $i++;
}; 

$i = 1; 
while($i <= 100) {
    if ($i % 2 === 0) {
        echo $i . " Hello, PHP" . "\n";
    } else {
        echo $i . " Я пишу на PHP" . "\n";
    }
    $i++;
}; 




// добавить в массив

$array = [];

for ($i = 0; $i <= 100; $i++) {
    $array[] = $i . " Я пишу на PHP" . "\n";
};

echo print_r($array); 

// перебор массива

foreach ($array as $key => $letter) {
    echo $key . ": " . $letter . "\n";
}

 for ($i = 0; $i < count($array); $i++) {
     echo $i . ": " . $array[$i] . "\n";
}




// переменные 

$number = 157;
$string = "83";
$result = $number + $string;

echo $result . "\n"; 

echo $number . "+" . $string . "=" . $result . "\n"; 

echo $result . " " . gettype($result) . "\n";

unset($number, $string);



// сравнение и логика

$first = 10;
$second = 5;
$third = 13;
$fourth = 7;

echo (int) ($first == $second) . "\n";
echo (int) ($third >= $fourth) . "\n"; */



// приведение типов

$number = 158;

settype($number, "string");
echo $number . " " . gettype($number) . "\n";

settype($number, "int");
echo $number . " " . gettype($number) . "\n";

settype($number, "null");
echo $number . " " . gettype($number) . "\n";

settype($number, "bool");
echo $number . " " . gettype($number) . "\n"; 




?>
</pre>