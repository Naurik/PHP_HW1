<?php

//1 Фибоначчи
function Fibonacci($number)
{
    if($number < 1)
        return 0;
    if($number == 1)
        return 1;
    return Fibonacci($number-1) + Fibonacci($number - 2);
}

$fib_number = 5;

for($i = 0; $i < $fib_number; $i++)
{
    echo Fibonacci($i) . " ";
}
echo "\n";

//2 четные
$arr = [1,2,3,4,5];


for($i = 0; $i < count($arr); $i++)
{
    if($arr[$i] % 2 == 0)
    {
        $arr[$i] *= 3;
        print_r($arr[$i]);
        echo " ";
    }
}
echo "\n";

//3 простые числа
function Simple($number)
{
    for($i=2;$i<= $number/2;$i++)
    {
        if( ($number%$i)==0 )
            return 0;
    }
    return 1;
}

for($i=2; $i < 100; $i++)
    if(Simple($i))
        echo $i . " ";
