<?php

// 배열의 길이를 반환하는 my_len() 함수를 작성하세요.


// function my_len($cd)
// {   
//     $count = 0;
//     foreach($cd as $val)
//     {
//         $count = $count + 1; //$count++로 사용 가능
//     }
//     return $count;
// }

// $arr_base = array("asd", "이", "오", "우", "ㅇ");
// echo my_len($arr_base); $arr_base를 파라미터로 줌


// echo "\n";


// function my_len1($cd)
// {
//     $count = 0;
//     foreach ($cd as $val)
//     {
//         $count = $count + 1;
//     }
//     return $count;
// }

// $arr_base = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// echo my_len($arr_base);
// echo "\n";




// //별찍기 함수로 만들기 ex)파라미터가 3이면 별이 3개찍힘 개행

function my_star($sky)
{
    for ($i=0; $i < $sky; $i++) { 
        echo "*";
    }
    echo "\n";
}

// echo my_star(3);

// echo "\n";

//위에서 별찍기 함수를 만들어서 for문이 두개가 들어갈 필요가 없고
//대신 for문 안에 별찍기 함수를 넣어줘서 별이 입력되게함.
//moon()안에 변수값 준이유는 echo에서 값을 넣을 때 
// ex) echo moon(3)에서 3=$cloud이기 때문에 값을 대입하기 위해서 사용됨.

// 직사각형 별찍기
function moon($cloud)
{
    for ($i = 1; $i<=$cloud; $i++)
    {
        my_star($cloud);
    }
    echo "\n";
}

// echo moon(3);

// 이것도 아닌것같음
// function mars($pup)
// {
//     for($i = 1; $i > $pup; $i++)
//     {
//         my_star($pup);
//     }
//     echo "\n";
// }

// echo mars(5);

//for문만 이용한 별찍기
//$num = 6;
// for($i=0; $i < $num; $i++) 
// {
//     for($star=0; $star < $i ; $star++) { 
//         echo "*";
//     }
//     echo "\n";
// }

// 이거 아님
// function my_star1($ground)
// {
//     for ($i = 0; $i < 6; $i++)
//     {
//         for($star=0; $star < $i; $star++)
//         {
//             echo "*";
//         }
//         echo "\n";
//     }
// }
// echo my_star1(5);

// 이것도 아님
// $num = 6;
// for ($i = 0; $i < $num; $i++)
// {
//         function t_star($sky)
//     {
//         for ($i=0; $i < $sky; $i++) 
//         { 
//             echo "*";
//         }
//     }
//     echo "\n";
// }

// echo t_star(5);





?>