<?php

    // $arr = array(5, 10, 7, 3, 1);

    //이렇게 숫자주는거 하면 안됨.array값이 늘어날때 적용안됨
    // for ($i=0; $i < 5 ; $i++) { 
    //     echo $i.">".$arr[$i]."\n";
    // }

    // echo "\n";

    // for ($i=0; $i < count($arr) ; $i++) { 
    //     echo $i.">".$arr[$i]."\n";
    // }

    // foreach ($arr as $key => $val) {
    //     echo $key.">".$val."\n";
    // }
    
    // sort($arr);

    // foreach ($arr as $ar) {
    //     print $ar."\n";
    // }


    //썜이한거
    
    // $temp = $arr[0];
    // $arr[0] = $arr[1];
    // $arr[1] = $temp;

    // var_dump($arr)

    // function fnc_m($a, $b)
    // {
    //     $temp = $a;
    //     $a = $b;
    //     $b = $temp;
    // }

    // $i = $arr[0];
    // $lol = $arr[1];

    // print $b.",".$a;
    // fnc_m($i, $lol);
    // // var_dump();

    

    // function fnc_arr()
    // {
    //     for ($i=0; $i < count($arr); $i++) 
    //     {
    //         for ($al=0; $al < $i; $al++) 
    //         { 
    //             if($i<$al)
    //             {
    //                 $temp = $i;
    //                 $i = $al;
    //                 $al = $temp;
    //             }
    //         }
    //     }
    // }

    // fnc_arr($a, $b)
    // print($arr);

    $arr = array(5, 10, 7, 3, 1);
    
    // function fnc_arr1($arr)
    // {
    //     for ($i=0; $i < count($arr)-1; $i++)
    //     {
    //         for($al=0; $al < count($arr)-1; $al++)
    //         {
    //             if($arr[$al]>$arr[$al+1])
    //             {
    //                 $temp = $arr[$al];
    //                 $arr[$al] = $arr[$al+1];
    //                 $arr[$al+1] = $temp;
    //             }
    //         }
    //     }
    //     return $arr;
    // }

    function fnc_arr2($arr)
    {
        for ($i=count($arr)-1; $i > 0 ; $i--)  //4번 돌아야되니까 5개중에 1빼서 4번 돌게
        { 
            for ($al=0; $al < $i; $al++) 
            { 
                if($arr[$al]>$arr[$al+1])
                {
                    $temp = $arr[$al];
                    $arr[$al] = $arr[$al+1];
                    $arr[$al+1] = $temp;
                }
            }
        }
        return $arr;
    }

    $result = fnc_arr2($arr);
    print_r($result);

?>