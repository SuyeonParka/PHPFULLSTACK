<?php
//"I am always Hello."를 입력하고 문장중 "Hello"를 "Happy"로 바꾸어 
//출력하는 프로그램을 구현해 주세요.

// define("I am always", "Hello(%s)");
// printf("I am always", "Happy");

// $str_tng = "I am always Hello.";
// $str_tng1 = "Happy";
// $str_sum = $str_tng.$str_tng1;
// echo substr($str_tng, 0, 11);
// echo substr($str_tng1, 0);
// echo substr($str_tng, 0, 11)." ".substr($str_tng1, 0);


// echo "\n";

//another way
// $str_all = "I am always Hello.";
// $str_expl = explode("Hello", $str_all);
// $str_impl = implode("Happy", $str_expl);
// echo $str_impl;

// var_dump($str_expl);

//함수명 : my_str_replace
//리턴값 : strint(data type) $result_str(변수명)

// function my_str_replace($result_str)
// {
//     $str_tng = "I am always Hello.";
//     $str_tng1 = "Happy";
//     for ($i=0; $i < 6; $i++) 
//     { 
//         if($str_tng[4] = "Hello")
//         {
//             echo substr($str_tng[3])." ".substr($str_tng1,[0]);
//         }
//     }
// }


//제일 먼저 echo를 살피는데 "Happy"가 입력돼있어서
//function my_str_replace에서 $b의 값이 "Happy"가 된다
//그럼 $result_str에도 $b의 값이 적용되어서 결과적으로 Happy가 적용된다.
//return값은 함수를 돌렸을 때 결과적으로 나오는 값이 있어야되기 때문에 필요함.
//explode로 자른 문자에 implode는 explode에서 자른 문자에 $b를 연결시켜야하기 때문에
//implode($b, $str_expl)이렇게 사용됨

function my_str_replace($b)
{
    $str_tng = "I am always Hello.";
    $str_expl = explode("Hello", $str_tng);
    $result_str = implode($b, $str_expl);
    return $result_str;
}

echo my_str_replace("Apple");

echo"\n";

//teacher
$str = "I am always Hello.";
function my_str_replace1($pram_str, $pram_separator, $param_ch)
{
    $str_expl = explode($pram_separator, $pram_str);
    $result_str = implode($param_ch, $str_expl);
    return $result_str;
}

echo my_str_replace1($str, "am", "Happy");
echo "\n";
echo str_replace("Hello", "Apple", $str);







?>