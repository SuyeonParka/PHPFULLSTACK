<?php

/*<반복문>
for, while, foreach, do-while

<while문>
-무한 반복 주의
-조건을 체크하고 연산을 실행하는 루프

$i = 1;
while($i === 1)
{
    echo ++$i; //한번만 찍고 멈춤
}
while($i === 1)
{
    echo $i; 
    break;
}
while(true) //무한루프
{
    echo $i; 
    break;
}
while($i !== 1)
{
    echo $i; // while문에서 false라서 안찍힘
}

<do-while>문
-무조건 do연산을 실행 while을 돌지말지 결정함


$i = 1;
do 
{
    echo $i;
} 
while ($i !== 1);

<for>문
-시작과 끝을 우리가 지정해주는 루프(=루프의 횟수 지정 가능)

for ($i=0; $i < 2; $i++) 
{ 
    echo $i, "\n";
}


<문제>
숫자 1 ~ 50까지 반복문을 이용해서 더하는 프로그램을 만들어주세요

<for문으로 만들기>

$sum = 0;
for ($i=1; $i <= 50 ; $i++) 
{ 
    $sum += $i;         //여기에 $i += 1;를 넣어줘버리면 for 자체에서 i++를 주기 때문에 $i에 1을 두번이나 더해주게 되는 꼴
}
echo $sum;

echo "\n";

// <while문으로 만들기>
$i = 1;
$sum = 0;
while ($i <= 50)
{
    $sum += $i;
    $i += 1;  //대신에 $i++해줘도됨
}

echo $sum;

echo "\n";

// <do-while문으로 만들기>
$i = 1;
$sum = 0;
do 
{
    $sum += $i;
    $i += 1;
}
while ($i <= 50);

echo $sum;

연산한 결과를 저장할 곳을 꼭 만들어줘야함 $sum = 0;처럼

*/





?>