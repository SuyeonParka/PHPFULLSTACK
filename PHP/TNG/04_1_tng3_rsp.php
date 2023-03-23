<?php
    // echo rand(0, 10);
    //0가위 1바위 2보
    // $game ="";
    // $hand = "보";
    $hand=rand(0,2); //나
    $game=rand(0,2); //컴


    if ($hand==0 && $game==0) {
        echo '가위로 비겼습니다.';
    }
        else if($hand==1 && $game==1) {
            echo '바위로 비겼습니다.';
        }
        else if($hand==2 && $game==2) {
            echo '보로 비겼습니다.';
        }
        else if($hand==0 && $game==1) {
            echo '바위로 컴퓨터 승';
        }
        else if($hand==1 && $game==2) {
            echo '보로 컴퓨터 승';
        }
        else if($hand==2 && $game==0) {
            echo '가위로 컴퓨터 승';
        }
        else if($hand==1 && $game==0) {
            echo '바위로 플레이어 승';
        }
        else if($hand==2 && $game==1) {
            echo '보로 플레이어 승';
        }
        else if($hand==0 && $game==2) {
            echo '가위로 플레이어 승';
        }

    echo "\n", "\n";


    // //0가위 1바위 2보
    // $hand = "보";
    // $game = rand(0,2);
    // $g ="";

    // if ($hand = '가위')
    // {
    //     $game = 0;
    //     $g = '비김';
    // }
    // else if ($hand = '바위')
    // {
    //     $game = 1;
    //     $g = '비김';
    // }
    // else if ($hand = '보')
    // {
    //     $game = 2;
    //     $g = '비김';       
    // }
    // if ($hand = '가위') 
    // {
    //     $game = 2;
    //     $g = '이김';
    // } 
    // else if ($hand = '바위')
    // {
    //     $game = 0;
    //     $g = '이김';
    // }
    // else if ($hand = '보')
    // {
    //     $game = 1;
    //     $g = '이김';
    // }
    // if ($hand = '가위') {
    //     $game = 2;
    //     $g = '짐';
    // }
    // else if ($hand = '바위') 
    // {
    //     $game = 0;
    //     $g = '짐';
    // }
    // else if ($hand = '보') 
    // {
    //     $game = 1;
    //     $g = '짐';
    // }

    // echo '결과: '.$g.' 내가 낸 값:'.$hand.' 컴이 낸 값:'.$game;

    //0가위 1바위 2보
    $hand = "보";
    $game = rand(0,2);
    $g ="";
    if ($hand!==0 && $hand!==1 && $hand!==2)
    {
        echo '값을 다시 입력해주세요';
    }
    else
    {   //유저가 가위
        if ($hand === '가위')
        {
            if ($game === 0)
            {
                $g= '비김';
            }
            else if ($game === 1)
            {
                $g= '짐';
            }
            else
            {
                $g= '이김';
            }
        }
        else if ($hand === '바위')
        {
            if ($game === 0)
            {
                $g = '이김';
            }
            else if ($game === 1)
            {
                $g = '비김';
            }
            else 
            {
                $g = '짐';
            }
        }
        else if ($hand === '보')
        {
            if ($game === 0)
            {
                $g = '짐';
            }
            else if ($game === 1)
            {
                $g = '이김';
            }
            else 
            {
                $g = '비김';
            }
        }
    }    

    echo '결과: '.$g.' 내가 낸 값:'.$hand.' 컴이 낸 값:'.$game;

    echo "\n", "\n";
    
    $randNum = rand(0, 2);
    $gawibawibo = '';

    switch ($randNum) {
    case 0:
        $gawibawibo = '가위';
        break;
    case 1:
        $gawibawibo = '바위';
        break;
    case 2:
        $gawibawibo = '보';
        break;
    default:
        $gawibawibo = '';
        break;
    }

    echo "컴퓨터의 선택은 : {$gawibawibo}";
?>