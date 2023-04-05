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




// 별만찍는 함수
// function fnc_print_star($num)
// {
//     for ($i=1; $i <= $num ; $i++) 
//     { 
//         echo "*";
//     }
//     echo "\n";
// }

// echo my_star(5);

// fnc_print_star(1);
// fnc_print_star(2);
// fnc_print_star(3);
// fnc_print_star(4);
// fnc_print_star(5);


/*---------------------------------------
(수정이력관리 하는 법)
파일명 :
시스템명 :
이력
    v001 : new - d1111
    v002 : fnc_print_str 수정 - d1111
----------------------------------------*/
// 위 함수를 내가 원하는 '문자'로 출력
// function fun_print_str($param_num) // v002 del
// function fnc_print_star($num, $k)   // v002 add
// {
//     for ($i=1; $i <= $num ; $i++)
//     {   
//         //echo "*"; //v002 del
//         echo $k;    // v002 add
//     }
//     echo "\n";
// }

// fnc_print_star(3, "@");
// fnc_print_star(2, "@");
// fnc_print_star(1, "@");

//reference(현업에서 많이 사용)
// function fnc_reference2( &$param_str )
// {
//     echo "2번 : $param_str \n";
//     $param_str = "fnc_reference2에서 값 변경";
//     echo "3번 : $param_str \n";
// }
// $str = "aaa";
// echo "1번 : $str \n";
// fnc_reference2($str);
// echo "4번 : $str \n";


//--------------class----------------

class Food
{
    //접근 제어 지시자 : public private protected

    //멤버 변수
    protected $str_name; //private에서 protected로 바꿈 : 상속클래스에서 받을 수 있게 할려교
    protected $int_price;

    //메소드(class 내에 있는 함수)
    public function __construct( $param_name, $param_price) //__construct는 고정된 이름임, 안에 든 식이 자동으로 실행
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }

    public function fnc_print_food()
    {
        $str = $this->str_name." : ".$this->int_price."원";
        echo $str;
    }

    public function int_food_price($food_price) //int_price멤버변수가 private으로 설정돼있어서 외부에서 접근하려면 public function(외부에서도 접근할 수 있는)만들어주고 밖에서 값 세팅해줌
    {
        // $food_price = $this->int_price; //첨에 이래했다가 값 적용안됐음
        // echo $food_price;
        $this->int_price=$food_price;
    }
    
}

// $obj_food = new Food("탕수육", 10000);

// // $obj_food->fnc_print_food();

// $obj_food->int_food_price(50000);

// $obj_food->fnc_print_food();



// Food Class의 멤버 변수 $int_price의 값을 12000원으로 바꾸어 주세요.
// this는 class안에 있는 모든 것을 가리킴 그래서 ->로 불러올 수 있음
// class사용이유 : 개발자들이 좀 더 소스코드를 파악하기 위해서
// class 안의 종류 : 멤버 변수와 매소드

// 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할 수 있다.
class KoreanFood extends Food //extends 부모 상속자
{
    protected $side_dish;

    public function __construct( $param_name, $param_price, $param_side_dish)
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        $this->side_dish = $param_side_dish;
    }

    // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
    public function fnc_print_food()
    {
        // $str = $this->str_name." : ".$this->int_price."원\n"."사이드 : ".$this->side_dish;
        parent::fnc_print_food();
        $str = "\n사이드 : ".$this->side_dish."\n";
        echo $str;
    }
}

$obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무");
$obj_korean_food->fnc_print_food();

// 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의










?>