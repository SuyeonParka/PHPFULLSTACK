<?php
/*<조건문>
if문(범위형조건에 맞음) switch문(값이 딱 정해져있는 것에 맞음)



$i = 1;
if($i % 2 === 0)
{
    echo "짝수";
}
else
{
    echo "홀수";
}


$i = "2";
if($i === "1")
{
    echo "문자열 1입니다.";
}
else if ($i === 1)
{
    echo "숫자 1입니다.";
}
else 
{
    echo "1이 아닙니다.";    
}

<if 문제>
과목의 종류는 국어, 영어, 수학, 과학
평균점수가 60점 이상이고, 각 과목별 점수가 40 이상 일 때 "합격"을 출력
그 외는 "불합격"출력


$korean = 80;
$eng = 90;
$math = 39;
$sci = 60;
$avg = ($korean+$eng+$math+$sci)/4;

if ($avg>=60)
{
    if($korean>=40 && $eng>=40 && $math>=40 && $sci>=40)
    {
        echo "합격";
    }
    else 
    {
        echo"불합격";
    }
}
if ($avg>=60 || ($korean>=40 && $eng>=40 && $math>=40 && $sci>=40))
{   
    echo "합격";
}
else 
{
    echo "불합격";
}

<switch문>
switch (체크해야할 변수) 
{
    case '변수가 어떤 케이스냐':
        그때할 처리
        break;
    
    default: 위 케이스 작성한거 말고 나머지는 이거 적용
        # code...
        break;
}
$str_loc 에 지역명을 저장하고 , 
서울은 "서울사람" 대구는 "대구사람" 부산은 "부산사람" 나머지는 "타지역사람"


$str_loc = "";

switch ($str_loc) 
{
    case '서울':
        echo "서울사람";
        break;
    case '대구':
        echo "대구사람";
        break;
    case '부산':
        echo "부산사람";
        break;
    
    default:
        echo "타지역사람";
        break;
}
각 case마다 break 필수 아니면 안멈추고 다나옴
*/



















?>