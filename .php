<?php
// Функция, которая принимает массив чисел и анонимную функцию в качестве параметра
function applyFunctionToElements(array $numbers, $callback) {
    $result = array();
    foreach ($numbers as $number) {
        $result[] = $callback($number);
    }
    return $result;
}

// Пример использования функции
$numbers = [1, 2, 3, 4, 5];
$doubleNumbers = applyFunctionToElements($numbers, function($num) {
    return $num * 2;
});

print_r($doubleNumbers);
// Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
?>