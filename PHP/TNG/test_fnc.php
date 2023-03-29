<?php
//버블정렬
    $arr = array(5, 10, 7, 3, 1);
    function fnc_arr($arr)
    {
        for ($i=count($arr)-1; $i > 0; $i--) 
        { 
            for ($boat=0; $boat<$i ; $boat++) 
            { 
                if($arr[$boat]>$arr[$boat+1])
                {
                    $temp = $arr[$boat];
                    $arr[$boat] = $arr[$boat+1];
                    $arr[$boat+1] = $temp;
                }    
            }
        }
        return $arr;
    }

    $result = fnc_arr($arr);
    print_r($result);


    //쌤이한거
    $arr = array(5, 10, 7, 3, 1);
    $cnt = count($arr) - 1;
    $cnt_r= count($arr) -1;
    for($cnt_loop  =  0; $cnt_loop <= $cnt; $cnt_loop++)
    {
        for($c_room = 0; $c_room < $cnt_r; $c_room++)
        {
            $c_room2 = $c_room +1;
            if($arr[$c_room] > $arr[$c_room2])
            {
                $temp = $arr[$c_room];
                $arr[$c_room] = $arr[$c_room2];
                $arr[$c_room2] = $temp;
            }
        }
        $cnt_r--;
    }

    //가원 코드 (뒤에서 부터 비교)
    for ($ii = 1; $ii < $cnt; $ii++)
    {

    }



    // function fnc_arr2($arr)
    // {   
    //     $i=count($arr)-1;
    //     while ($i > 0) 
    //     {
    //         while ($boat < $i) 
    //         {
    //             if ($arr[$boat]>$arr[$boat+1]) 
    //             {
    //                 $temp = $arr[$boat];
    //                 $arr[$boat] = $arr[$boat+1];
    //                 $arr[$boat+1] = $temp;
    //             }
    //         }    
    //     }
    //     return $arr;
    // }

    // $result = fnc_arr2($arr);
    // print_r($result);



?>