<?php

/* 국밥과 크림우동 사이에 스테이크를 추가해주세요 */

// $food = fopen("../Example/sam/food.txt", "w");

// fputs($food, "김밥
//             샌드위치
//             백반
//             국밥
//             스테이크
//             크림우동
//             연어초밥
//             탕수육
//             돈가스");


// fclose($food);

// $food1 = fopen("../Example/sam/food1.txt", "a");

// //내가 하다만거
// $arr = array();
// for ($i=0; $i < ; $i++) 
// { 
//     if ($arr[] === "국밥") 
//     {
//         fputs($food1, "스테이크");
//     }
// }

// fputs($food1, "스테이크");
// fclose($food1);

//쌤이 한거
$f_food = file("../Example/sam/food1.txt");
$print_food = "";
foreach ($f_food as $val) 
{
    if(trim($val) === "국밥")
    {
        $print_food .= $val."스테이크\n";
    }
    else 
    {
        $print_food .= $val;
    }
}

print $print_food;
$f_food = fopen("../Example/sam/food1.txt", "w");
fputs($food, $print_food);
fclose($food);

/*
file은 배열형태로 한줄한줄 담아줌
$val가 제일 뒤에 개행까지 포함돼서 trim(빈공간 삭제)사용
국밥이 아닌 것은 그냥 출력해줌
그다음 해당파일을 다시 열어서 내용을 치환해줌 
*/










?>