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

// echo "\n";

// function moon($cloud)
// {
//     for ($i = 1; $i<=$cloud; $i++)
//     {
//         my_star($cloud);
//     }
//     echo "\n";
// }

// echo moon(3);

function mars($pup)
{
    for($i = 1; $i > $pup; $i++)
    {
        my_star($pup);
    }
    echo "\n";
}

echo mars(5);
//$num = 6;
// for($i=0; $i < $num; $i++) 
// {
//     for($star=0; $star < $i ; $star++) { 
//         echo "*";
//     }
//     echo "\n";
// }


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