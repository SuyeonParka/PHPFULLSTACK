<?php

// 두 매개변수의 차를 구하는 함수를 구현해 주세요.
// function fnc_minu($int_a, $int_b)
// {
//     $minu = $int_a - $int_b;

//     return $minu;
// }

// $result_minu = fnc_minu(3, 1);
// echo $result_minu;

// echo "\n";
// 두 매개변수를 나눈 함수를 구현해 주세요.
// function fnc_divi($int_a, $int_b)
// {
//     $divi = $int_a / $int_b;

//     return $divi;
// }
// $result_divi = fnc_divi(4, 2);
// echo $result_divi;

// echo "\n";
// 두 매개 변수를 곱하는 함수를 구현해 주세요.

// function fnc_mul($int_a, $int_b)
// {
//     // $mul = $int_a * $int_b;

//     // return $mul;

//     return $int_a*$int_b; //방법2
// }
// $result_mul = fnc_mul(8, 4);
// echo $result_mul;

// echo "\n";
//각각의 결과를 출력해 주세요.
// echo fnc_minu(10,6), "\n";
// echo fnc_divi(10,6), "\n";
// echo fnc_mul(10,6), "\n";

// 빼기, 곱하기, 나누기
function fnc_minu()
{
    $args = func_get_args();
    $minu = $args[0]*2;

    foreach ($args as $val)
    {
        $minu -= $val;
    }
    return $minu;
}
echo fnc_minu(10,4,1);
echo "\n";

function fnc_div()
{
    $args = func_get_args();
    $div = $args[0]*$args[0];

    foreach ($args as $val)
    {
        $div /= $val;
    }
    return $div;
}
echo fnc_div(8, 2, 2);
echo "\n";

function fnc_mul()
{
    $args = func_get_args();
    $mul = 1;

    foreach ($args as $val)
    {
        $mul *= $val;
    }
    return $mul;
}
echo fnc_mul(24, 2, 2);
echo "\n";

function fnc_minu2()
{
    $args = func_get_args();

    foreach($args as $key => $val)
    {
        if($key === 0)
        {
            $sub = $val;
        }
        else 
        {
            $sub -= $val;
        }   
    }
    return $sub;
}
echo fnc_minu2(10, 10, 5);
echo "\n";

function fnc_div1()
{
    $args = func_get_args();

    foreach($args as $val)
    {
        if($val === $args[0])
        {
            $sub = $val;
        }
        else 
        {
            $sub /= $val;
        }   
    }
    return $sub;
}
echo fnc_div1(10, 10, 5);
echo "\n";

function fnc_mul1()
{
    $args = func_get_args();

    foreach($args as $val)
    {
        if($val === $args[0])
        {
            $sub = $val;
        }
        else 
        {
            $sub *= $val;
        }   
    }
    return $sub;
}
echo fnc_mul1(8, 2, 2);
echo "\n";
// 쌤이한거
function fnc_args_minus()
{
    $result_args = func_get_args();
    $result_minus = null;

    foreach($result_args as $val)
    {
        if( is_null($result_minus)) // 비어있으면 세팅
        {
            $result_minus = $val;
        }
        else 
        {
            $result_minus -= $val;
        }
    }
    return $result_minus;
}
    echo fnc_args_minus(10,3,4);
?>