<?php
    // Подготовьте массив целых чисел (4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2). 
    // Разработайте анонимную функцию для применения в качестве аргумента array_map, 
    // возвращающую для каждого элемента массива строковое значение: «четное» или «нечетное». 
    // Для проверки четности числа используйте деление по модулю (%);


        $arrayOne = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
        $result = [];

        $result = array_map(function ($item) {
            return $item % 2 == 0 ? 'четное' : 'нечетное';
        }, $arrayOne);
        print_r($result);


    // Разработайте функцию с объявленными типами аргументов и возвращаемого значения, 
    // принимающую в качестве аргумента массив целых чисел. 
    // Результатом работы функции должен быть массив, содержащий три элемента: max — наибольшее число, 
    // min — наименьшее число, avg — среднее арифметическое всех чисел массива;

        $newArray = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
        function getNumber(array $array): array
        {
            
            $min = $array[0];
            $max = $array[0];
            $arrayResult = [];
            $sum = 0;
            
            foreach ($array as $value) {
                if ($value < $min)
                    $min = $value;
                if ($value > $max)
                    $max = $value;
                $sum += $value;
            }
            $avg = round($sum / count($array), 2);
            return $arrayResult = ['min' => $min, 'max' => $max, 'average' => $avg];
        }

        $resultAll = getNumber($newArray);
        print_r($resultAll);