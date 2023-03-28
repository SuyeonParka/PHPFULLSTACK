<?php
//전역 변수
// function fnc_add()
// {   
//     global $global_int_a;
//     $global_int_a = $global_int_a + 10;
//     return $global_int_a;
// }

// $global_int_a = 5; //전역변수 초기화(값 대입)

// echo fnc_add();
//모르고 전역변수를 이름 똑같이 줘버리면 값이 이상해짐.
//그래서 명령규칙 중요 ex) $global_int_a

//정적 변수
// function fnc_add_1()
// {
//     $i = 1; 
//     echo $i."\n";
//     $i++;
// }

// for($i = 0; $i < 3;$i++)
// {
//     fnc_add_1();
// }

//위에 둘이 따로따로 놈
//for문은 단순히 0,1,2 근데 안에 fnc_add_1를 호출함
//개행하고 종료되는데 $i=1(초기화=1)때문에 111
//function안에서 $i++가 있다고 값이 증가되는 건 아님.

// function fnc_add_2()
// {
//     static $i = 1; //static은 바로 전 호출에서의 값을 기억
//     echo $i."\n";
//     $i++;
// }

// for($i = 0; $i < 3;$i++)
// {
//     fnc_add_2();
// }

//call by value
// function fnc_val($int_a, $int_b)
// {
//     $int_a = 3;
//     $int_b = 4;
//     echo "function =>",$int_a," ",$int_b,"\n";
// }

// $int_a = 1;
// $int_b = 2;
// fnc_val(5, 6);
// echo $int_a, " ", $int_b;


//function안에서 fnc_val로 처음에 a,b값을 5,6을 넣어줬는데 
//int_a,b값을 다시 3,4로 설정해줬기 때문에 3,4가 적용됨.
//메모리상에 1,2가 있음
//fuc_val에 3,4
//(밑에)echo는 기존에 설정된 1,2값을 봄

//call by reference
function fnc_val(&$a, &$b)
{
    $a = 3;
    $b = 4;
}

$int_a = 1;
$int_b = 2;
fnc_val($int_a, $int_b);

echo $int_a, " ", $int_b;
echo"\n";
//메모리상에 1,2적용
//&:주소를 참조(파라미터로 준 주소 참조 - fnc_val($int_a, $int_b)의 주소값 참조)

//다른방법(효율적이진 않음)
function fnc_val1(&$a, &$b)
{
    $a = 3;
    $b = 4;
    return array($a, $b);
}

$int_a = 1;
$int_b = 2;
// fnc_val($int_a, $int_b);

echo print_r(fnc_val1($int_a, $int_b));

?>