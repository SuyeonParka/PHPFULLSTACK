<?php

// 파일명 : gugudan.txt
// 파일 위치 : sam
// 내용은 아래와 같습니다.
// 2단
// 2 * 1 = 2
// 2 * 2 = 4
// ...
// 2 * 9 = 18


// 단이름 붙여서 출력
// $f_gugudan = fopen("../Example/sam/gugudan.txt", "a"); //a 파일 없으면 생성, 포커스가 파일의 끝

// $gugu = 2;
// $dan = $gugu."단\n";

// for ($i=0; $i < 10; $i++) 
// {   
//     if ($i === 0) 
//     {
//         echo $gugu;
//     }
//     else 
//     {
//         echo $dan."*".$i."=".$gugu*$i."\n";
//     }
//     fputs($f_gugudan, );
// }

// fclose($f_gugudan);



// 몇 단 없이 9단까지 출력
$f_gugu = fopen("../Example/sam/gugu.txt", "a");

$print_gugu = "";
for ($i=2; $i < 10; $i++) 
{   
    fputs($f_gugu, $i."단\n");
    for ($d=1; $d < 10; $d++) 
    {
        $gg = $i."*".$d."=".$i*$d."\n";
        fputs($f_gugu, $gg);
    }
}

fclose($f_gugu);

//다른 방법
//fputs 자리에(넣기전에 $print_gugu=""넣어주고) $print_gugu = $print_gugu 넣어줌


/* 몇 단없이 그냥 2단만 출력
$f_gugu = fopen("../Example/sam/gugudan.txt", "a");

$gugu = 2; 
for ($i=0; $i < 10; $i++) 
{   
    $gg = $gugu."*".$i."=".$gugu*$i."\n";
    fputs($f_gugudan, $gg);
}

fclose($f_gugudan);
*/


// 재성 함수(구구단을 함수로 구현)
// $f_gugudan = fopen("../Example/sam/gugumake.txt", "a");

// function gugumake($dan)
// {   
//     $gugu_ans=null; //워닝떠서
//     for ($i=0; $i < 10; $i++)
//     {
//         if ($i === 0)
//         {
//             $gugu_ans.=$dan."단\n";
//         }
//         else 
//         {
//             $gugu_ans.="$dan * $i = ".$dan*$i."\n";
//         }
//     }
//     return $gugu_ans;
// }

// fputs($f_gugudan,gugumake(2));
// fclose($f_gugudan);

/* 쌤
string(문자열)로 선언을 해줄려면 null대신에 ""(스페이스 빼고)
i를 1로 주고 if안에 있는 걸 밖으로 빼줌
*/

$fnc_gugu = fopen("../Example/sam/fnc_gugu.txt", "a");

function fnc_gugu($dan)
{   
    $gugu_ans=$dan."단\n";
    for ($i=0; $i < 10; $i++)
    {
         $gugu_ans.="$dan * $i = ".$dan*$i."\n";
    }
    return $gugu_ans;
}

fputs($fnc_gugu,gugumake(2));
fclose($fnc_gugu);



?>