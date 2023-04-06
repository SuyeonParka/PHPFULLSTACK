<?php
/*
<블랙잭 게임>

-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.v
    1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력v
2. 카드 합이 21을 초과하면 패배v
    2-1. 유저 카드 합이 21이 넘으면 결과 바로 출력v
4. 카드의 계산은 아래의 규칙을 따른다.
    4-1.카드 2~9는 그 숫자대로 점수v
    4-2. K·Q·J,10은 10점v
    4-3. A는 1점 또는 11점 둘 중의 하나로 계산
5. 카드의 합이 같으면 다음의 규칙에 따름
    5-1. 카드수가 적은 쪽이 승리 countv
    5-2. 카드수가 같을경우 비김v
6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
    6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음(딜러 자기자신의 카드가)
    6-2. 17 이상일 경우는 받지 않는다.
7. 1입력 : 카드 더받기, 2입력 : 카드비교(딜러와 플레이어의 카드 오픈:딜러가 짐??), 0입력 : 게임종료
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

//앞의 내용의 영향을 받는??거 뭐였드라,,


$deck = array(); 
$deck2 = array();
$user_card_arr = array();
$dealer_card_arr = array();
$arr = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10","J", "Q", "K");


//2장 랜덤값
for ($i=0; $i < count($arr); $i++) 
{   
    for ($k=0; $k < 4 ; $k++) 
    {   
        array_push($deck, $arr[$i]); //deck배열에 이배열을 넣는다??
    }
}

// var_dump($deck);
shuffle($deck);

//이거는 원본을 바꾸는 것
// for ($i=0; $i < 52; $i++) 
// { 
//     if ($deck[$i] === "K" || $deck[$i] === "J" || $deck[$i] === "Q") 
//     {
//         $deck[$i] = 10;
//     }
// }

$idx = 0;
array_push($user_card_arr, $deck[$idx++]);
array_push($dealer_card_arr, $deck[$idx++]);
array_push($user_card_arr, $deck[$idx++]);
array_push($dealer_card_arr, $deck[$idx++]);
// echo "유저 패 ".$user_card_arr;
// echo "딜러 패 : ".$dealer_card_arr;

// function card_get_score($arr)
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

function card_get_score($arr)
{
    $deck2 = array(); // $deck2 배열 초기화
    for ($i=0; $i < count($arr); $i++) 
    {
        switch ($arr[$i]) 
        {
            case 'K':
            case 'Q':
            case 'J':
                $deck2[$i] = 10;
                break;
            case 'A':
                $deck2[$i] = 11;
                break;
            default:
                $deck2[$i] = $arr[$i];
                break;
        }
    }
    $sum = array_sum($deck2);
    return $sum;
}

$result = card_get_score($user_card_arr);
echo "유저 : ".$result."\n";
$result1 = card_get_score($dealer_card_arr);
echo "딜러 : ".$result1;

// function dealer_card_sum($deal_sum) //딜러 카드 값이 17보다 작은경우 
// {
//     if ($result1 < 17 && $deal_sum === 1 ) 
//     {
//         array_push($dealer_card_arr, $deck[$idx++]);
//     }
//     elseif ($result1 < 17 && $deal_sum === 2) 
//     {
//         if ($result > $result1 && $result < 21) 
//         {
//             echo "결과 : 플레이어 승리";
//         }
//         elseif ($result < $result && $result1 < 21) 
//         {
//             echo "결과 : 딜러 승리";
//         }
//     }
//     elseif($result1 < 17 && $deal_sum === 0)
//     {
//         echo "게임종료 결과 : 플레이어 승리";
//     }
// }

// dealer_card_sum(1);




if ($result > 21)                               // 결과??
{
    echo "\n결과 : ".$result." "."유저 패배";
}
elseif ($result === 21) 
{
    echo "\n결과 : ".$result." "."유저 승리";
}
elseif ($result1 === 21) 
{
    echo "\n결과 : ".$result1."딜러 승리";
}
elseif ($result > $result1 && $result < 22) 
{
    echo "\n결과 : 유저 승리";
}
elseif ($result < $result1 && $result1 < 22) 
{
    echo "\n결과 : 딜러 승리";
}
elseif ($result === $result1) 
{
    if (count($user_card_arr) < count($dealer_card_arr)) 
    {
        echo "\n결과 : 유저 승리";
    }
    else 
    {
        echo "\n결과 : 비김";
    }
}
elseif ($deck = 'A' && $deck2 = 'A') 
{
    $result -= 10;
}








?>