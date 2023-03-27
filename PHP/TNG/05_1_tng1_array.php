<?php

// $food = array("떡볶이", "햄버거", "치킨", "피자", "국밥", "샐러드");
// print $food[1];
// echo count($food);
// echo $food[3];

//array $food에서 무작위로 값을 출력해 주세요.
// $food = array("떡볶이", "햄버거", "치킨", "피자", "국밥", "샐러드");
// echo $food[rand(0,5)];
// $rand_num = rand(0,5);
// echo $food[$rand_num];


//키는 요리명, 값은 주재료 하나로 이루어진 배열을 만들.
// (배열 길이는 4개=배열안에 들어가잇는 데이터가 4번방)
// $arr_ass = array (
                    // "된장찌개" => "파"
//                 , "볶음밥" => "양파"
//                 , "김치" => "마늘"
//                 , "비빔밥" => "참기름");
// echo $arr_ass["된장찌개"];

//키:김치 원소 삭제
$arr_ass_del = array (
                "된장찌개" => "파"
                , "볶음밥" => "양파"
                , "김치" => "마늘"
                , "비빔밥" => "참기름");
unset($arr_ass_del["김치"]);
// print_r($arr_ass_del);
var_dump($arr_ass_del);













// $food = array("떡볶이", "햄버거", "치킨", "피자", "국밥", "샐러드");
// $z = 0;
// echo $food[$z];
// $z++;
// echo $food[$z];
// $z++;
// echo $food[$z];
// $z++;
// echo $food[$z];


// for ($i=0; $i<=5; $i++)
// {
//     echo $food[$i];
// }



?>