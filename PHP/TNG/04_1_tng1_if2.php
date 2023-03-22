<?php
    $score = -100000;
    $grade = "F";  //디폴트값을 줘서 2번째 if문에 else는 F값을 줄 필요가 없음

    if ($score < 0 || $score > 100) //&&쓰면 0이하 100이상 값의 조건을 둘 다 충족시켜야 하기 때문에
    {
        echo '잘못된 점수입니다.'; //가능하면 부정이 앞쪽에 있는게 좋다.
    }
    else {                      //elseif는 조건이 필요해서
        if ($score === 100)
        {
            $grade = 'A+';
        }
        else if ($score >= 90)
        {
            $grade = 'A';
        }
        else if ($score >= 80)
        {
            $grade = 'B';
        }
        else if ($score >= 90)
        {
            $grade = 'C';
        }
        else if ($score >= 90)
        {
            $grade = 'D';
        }
        echo '당신의 점수는 ' .$score. '점 입니다. <' .$grade. '>'; //문자열을 '으로 묶고 .으로 연결
    }
?>

보통은 잘 입력된 값이 많음 근데 잘못된 값을 입력했을 경우를 상위에 둠
그런경우에는 예시로 ($score >=80 && $score <=90)이런 식의 and를 지워서
($score >= 80)으로만 쓸 수 있음