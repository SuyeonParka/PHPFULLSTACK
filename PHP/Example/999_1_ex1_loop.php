<?php
//1. while + if가 조합된거

// $i = 0;
// while( $i <= 4 )
// {
//     // $i++;
//     ++$i;
//     if( $i === 1 )
//     {
//         echo "1입니다.";
//     }
//     else if( $i === 4 )
//     {
//         echo "4입니다.";
//     }
    
// }

//foreach + if 조합
// $arr_ass = array("a"=>1, "b"=>2, "c"=>3);  //배열의 사이즈 : 3개 (값이 세개)
// foreach ( $arr_ass as $key => $val)
// {
//     if ($key === "c" || $val === 2)
//     {
//         echo "if";
//     }
// }


// 이중 루프
// for ($i=2; $i <= 9 ; $i++) 
// {
//     echo "$i 단\n";
//     for ($k=1; $k <= 9 ; $k++)
//     { 
//         echo $i."*".$k."=".$i*$k."\n";
//     }
// }

// 1~100 숫자 중에 짝수의 합을 구해주세요.

// $sum = 0;
// for ($i=0; $i <= 100; $i++) 
// { 
//     if ($i % 2 === 0) 
//     {
//         $sum += $i;
//     }
// }

// echo $sum;

// //이런 방법도 있다(*연산 느림)
// $sum = 0;
// for ($i=0; $i * 2<= 100; $i++) 
// { 
//     $sum += $i * 2;
// }

// echo $sum;
// 다른 방법
// $sum = 0;
// for ($i=2; $i <= 100; $i += 2) 
// { 
//     $sum += $i;
// }
// echo $sum;

// $i = 2;
// $sum = 0;
// while ($i <= 100) 
// {
//         $sum += $i;
//         $i += 2;
//    
// }
// echo $sum;

// $i = 1;
// $sum = 0;
// do 
// {
//     if($i % 2 === 0)
//     {
//         $sum += $i;
//         $i++;
//     }
// } 
// while ($i <= 100);
// echo $sum;


//배열
// $arr_test =
// array(
//     "a" => 1
//     ,"b" => 2
//     ,"info" => 
//         array(
//             "info_a" => 3
//             ,"info_b" => 4
//             ,"info_arr" => 
//                 array(
//                     "f_1" => 5
//                     ,"f_2" => 7
//                 )
//         )
//     );
// echo $arr_test["info"]["info_a"];
// echo "\n";
// echo $arr_test["info"]["info_arr"]["f_2"];
// echo "\n";
// echo $arr_test["info"]["info_a"]." ".$arr_test["info"]["info_arr"]["f_2"];

// $arr_test =
// array(
//     1
//     ,2
//     ,array(
//             "info_a" => 3
//             ,"info_b" => 4
//             ,"info_arr" => 
//                 array(
//                     "f_1" => 5
//                     ,"f_2" => 7
//                 )
//         )
//     );
// echo "\n";
// echo $arr_test[2]["info_arr"]["f_1"];


//함수
/*------------------------------------------
함수명      : fnc_sum
기능        : 파라미터를 더한 값을 리턴
파라미터    : INt $param_a
            INT $param_b
리턴값      : INT $sum;
-------------------------------------------*/

// function fnc_sum($param_a, $param_b)
// {
//     $sum = $param_a + $param_b;
//     return $sum;
// }

// $result = fnc_sum(4,6);
// echo $result;


//가변 파라미터
function fnc_sum2( ...$param_numbers )
{
    // $sum = 0;
    // foreach ($param_numbers as $val) 
    // {
    //     $sum += $val;
    // }
    // return $sum;
    return array_sum($param_numbers);
}
// echo fnc_sum2(3,4,5,6);

function fnc_global()
{
    global $global_i;
    $global_i = 0;
}

$global_i = 5;
fnc_global();

// fnc_global(); 이렇게하고 값을 호출하면 5가나옴 위치를 
// $global_i = 5; 반대로 주면 0이나옴

// echo $global_i;

// function fnc_static()
// {
//     static $static_i = 0; //static 없으면 초기값으로 0만 나오는데 static이 앞의 값을 불러줌
//     echo $static_i;       //static은 지금 함수 안에서만 사용 가능
//     $static_i++;
// }

// fnc_static();
// fnc_static();
// fnc_static();


//call by reference

function fnc_reference( &$param_str )
{
    $param_str = "fnc_reference";
}
$str = "aaa";
fnc_reference( $str );
// echo $str;





function my_star($moon)
{
    for ($k=1; $k <= $moon ; $k++) 
    { 
        echo "*";
    }
    echo "\n";
}

// echo my_star(5);

my_star(1)."\n";
my_star(2)."\n";
my_star(3)."\n";
my_star(4)."\n";
my_star(5)."\n";





















?>