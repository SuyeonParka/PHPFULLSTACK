<?php

//배열 안에 최대 값, 최소 값을 출력해주는 함수를 각기 구현해 주세요.
// 함수명은 "my_max", "my_min"



// function my_max($arr)
// {
//     for ($i=count($arr)-1; $i > 0; $i--) 
//     { 
//         for ($more=0; $more < $i; $more++) { 
//             if($arr[$boat]>$arr[$boat]+1)
//             {
//                 $temp = $arr[$boat];
//                 $arr[$boat] = $arr[$boat+1];
//                 $arr[$boat+1] = $temp;

//             }
//         }
//     }

// }

$arr = array(5, 10, 7, 3, 1);

function my_min($arr)
{   
    $temp = $arr[0];
    for ($i=0; $i < count($arr) ; $i++) 
    {
        if($temp>$arr[$i])
        {
            $temp = $arr[$i];
        }
    }
    return $temp;
}

// echo my_min($arr);
echo "최소값:".my_min($arr)."\n";

function my_max($arr)
{   
    $temp = $arr[0];
    for ($i=0; $i < count($arr) ; $i++) 
    {
        if($temp<$arr[$i])
        {
            $temp = $arr[$i];
        }
    }
    return $temp;
}

// echo my_max($arr);
echo "최대값:".my_max($arr)."\n";

// {
//     foreach ($arr as $key => $val) 
//     {
//         if($arr[$val]> $arr[$val]+1)
//         {
            
//         }
//     }
//     return $arr;
// }

// $result = my_max($arr);
// print_r($result);




?>