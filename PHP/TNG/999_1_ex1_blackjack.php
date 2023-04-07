<?php
/*
<블랙잭 게임>

-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.v
    1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
2. 카드 합이 21을 초과하면 패배
    2-1. 유저 카드 합이 21이 넘으면 결과 바로 출력
4. 카드의 계산은 아래의 규칙을 따른다.
    4-1.카드 2~9는 그 숫자대로 점수
    4-2. K·Q·J,10은 10점v
    4-3. A는 1점 또는 11점 둘 중의 하나로 계산
5. 카드의 합이 같으면 다음의 규칙에 따름
    5-1. 카드수가 적은 쪽이 승리 count
    5-2. 카드수가 같을경우 비김
6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
    6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
    6-2. 17 이상일 경우는 받지 않는다.
7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
8. 한번 썼던 카드는 다시 쓸 수 없다.(카드 중복 ㄴ)
--------------------------------------------------------*/
// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";


$deck = array();
$arr = array("A", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
$arr2 = array("K", "Q", "J", "10");


// for ($i=0; $i < 13 ; $i++) 
// {   
//     $arr = rand("A","12");
//     for ($k=0; $k < 4 ; $k++) 
//     {   
//         $arr2 = rand("K","10");
//         if ($arr[$i] === $arr[$k]) 
//         {
//             $i--;
//         }
//     }
// }

// function landom($game)
// {
//     for ($i=0; $i < 13 ; $i++) 
//     {   
//         for ($k=0; $k < 4 ; $k++) 
//         {   
//             array_push($what,$arr[$i].$arr2[$k]);
//         }
//     }
//     // echo $arr[$i].$arr2[$k];
// }


for ($i=0; $i < 13 ; $i++) 
{   
    for ($k=0; $k < 4 ; $k++) 
    {   
        array_push($deck,$arr[$i].$arr2[$k]);
    }
}


// var_dump($what);
shuffle($arr).shuffle($arr2);

echo "딜러 : ".array_pop($arr).array_pop($arr2)." ".array_pop($arr).array_pop($arr2)."\n";
// echo $arr[0].$arr2[0]."\n";

echo "나 : ".array_pop($arr).array_pop($arr2)." ".array_pop($arr).array_pop($arr2)."\n";
// echo $arr[0].$arr2[0];

// echo array_sum($what);

// function get_card($card_1, $card_2)
// {
//     $result = $card_1 + $card_2;
//     echo $result;
// }
// $my_score = $array_sum();
// $deal_score = $array_sum();


// if ($my_score || $deal_score > 21) 
//     {
//         echo "패배";
//     }
// elseif ($my_score || $deal_score === 21)
//     {
//         echo $score_sum;
//     }

// K·Q·J,10은 10점
// switch ($arr2) 
// {
//     case "K":
//         $score = 10;
//         break;
//     case "Q":
//         $score = 10;
//         break;
//     case "J":
//         $score = 10;
//         break;
// }

// function card_get_score($arr) switch문에 or 사용의 잘못된 방식
// {
//     $sum = 0;
//     for ($i=0; $i < count($arr); $i++) //문자열을 숫자로 바꿈
//     {
//         switch ($arr[$i]) 
//         {
//             case 'K'|| 'Q' || 'J': //or연산자 안먹힘
//                 $deck2[$i] = 10;
//                 break;
//             case 'A':
//                 $deck2[$i] = 11;
//                 break;
//             default :
//                 $deck2[$i] = $arr[$i];
//             break;
//         }
//     }
//     $sum = array_sum($deck2);
//     return $sum;
// }
// 7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
// $num = "";

// if ($num === 1) 
// {
    
// }
// elseif ($num === 2)
// {

// }
// else 
// {
    
// }


// 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리 count
// 5-2. 카드수가 같을경우 비김

// if (내카드의 합 === 딜러카드의 값) 
// {
//     if (내 카드의 개수 < 딜러 카드의 개수) 
//     {
//         echo "나 승리";
//     }
//     elseif (내 카드의 개수 === 딜러 카드의 개수) 
//     {
//         echo "비김";
//     }
    
// }
// class Blackjack
// {
//     public $dealer = array();
//     public $me = array();
// };


// $my_score = array_sum(array_pop($arr).array_pop($arr2)." ".array_pop($arr).array_pop($arr2));
// $deal_score = array_sum(array_pop($arr).array_pop($arr2)." ".array_pop($arr).array_pop($arr2));
// echo "딜러 : ".array_sum(array_pop($arr).array_pop($arr2)." ".array_pop($arr).array_pop($arr2))."\n";
// echo "나 : ".array_sum(array_pop($arr).array_pop($arr2)." ".array_pop($arr).array_pop($arr2))."\n";

// $arr2 = array("S", "C", "H", "D");
// $arr =
// array(
//     "A" => 11
//     ,"1" => 1
//     ,"2" => 2
//     ,"3" => 3
//     ,"4" => 4
//     ,"5" => 5
//     ,"6" => 6
//     ,"7" => 7
//     ,"8" => 8
//     ,"9" => 9
//     ,"10" => 10
//     ,"11" => 11
//     ,"12" => 12
//     );
// $arr2 =
// array(
//     "K"=>10
//     ,"Q"=>10
//     ,"J"=>10
//
// );


//이거는 원본을 바꾸는 것
// for ($i=0; $i < 52; $i++) 
// { 
//     if ($deck[$i] === "K" || $deck[$i] === "J" || $deck[$i] === "Q") 
//     {
//         $deck[$i] = 10;
//     }
// }

//2번 파일에서 나와 유저의 패를 각각보이고 싶을 때 썼었는데 오류뜸
// echo $user_card_arr; //배열이라서 echo로 안나옴
// echo $dealer_card_arr;




?>