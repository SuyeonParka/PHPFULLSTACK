<?php

    // $score = 100; 

    // if ($score === 100) {
    //     echo '당신의 점수는'.$score.'점 입니다.<A++>';
    // }
    // else if ($score > 90) {
    //     echo '당신의 점수는'.$score.'점 입니다.<A>';
    // }
    // else if ($score > 80) {
    //     echo '당신의 점수는'.$score.'점 입니다.<B>';
    // }
    // else if ($score > 70) {
    //     echo '당신의 점수는'.$score.'점 입니다.<C>';
    // }
    // else if ($score > 60) {
    //     echo '당신의 점수는'.$score.'점 입니다.<D>';
    // }
    // else {
    //     echo '당신의 점수는'.$score.'점 입니다.<F>';
    // }

    //이거 안됨 ;;
    // $score = 70; 
    // $msg = '당신의 점수는'.$score.'점 입니다.<>';
    // $test1 = 'A++';
    // $test2 = 'A';
    // $test3 = 'B';
    // $test4 = 'C';
    // $test5 = 'D';
    // $test6 = 'F';
    // $grade = "F"

    // if ($score === 100) {
    //     $msg.$test1;
    // }
    // else if ($score > 90) {
    //     $msg.$test2;
    // }
    // else if ($score > 80) {
    //     $msg.$test3;
    // }
    // else if ($score > 70) {
    //     $msg.$test4;
    // }
    // else if ($score > 60) {
    //     $msg.$test5;
    // }
    
    // echo $msg;


    $score = 55;
    $grade = "F";

    if ($score < 0 || $score > 100) 
    {
        echo '잘못된 값을 입력 했습니다.';
    } 
    else 
    {
        if ($score === 100) 
        {
            $grade = 'A++';
        }
        else if ($score >= 90) 
        {
            $grade = 'A';
        }
        else if ($score >= 80)
        {
            $grade = 'B';
        }
        else if ($score >= 70) 
        {
            $grade = 'C';
        }
        else if ($score >= 60) 
        {
            $grade = 'D';
        }
        echo '당신의 점수는'.$score.'점 입니다. <' . $grade . '>';
    }

    
    
?>