<?php
    // 한 곳에 여러값을 저장하고 싶을 때 쓰는 것-배열
    // $num = 10;
    // $num = 11;

    //매커니즘을 아는 것이 중요
    //배열
    // $week = array("Sun", "Mon", "Tue", "Wed");
    // print $week[1];[]안의 숫자는 '키'

    // $mon = "Mon";
    // $sun = "Sun";
    // $tue = "Tue";
    // $wed = "Wed";
    // $week2 = array($week[1], $week[3], $week[0], $week[2]);
    // echo $week2[3];

    //멀티타입 배열
    // $arr_mult_type = array("aaa", 1, 3.14, "a");
    // echo $arr_mult_type[1];
    // var_dump($arr_mult_type); //자세한 정보 보여줌

    //연상 배열
    //키 값은 보통 문자열, 통일시킴
    //키 값은 숫자를 줘도됨(소수점 x)근데 정수로도 안줌
    //key1가 컬럼명, 우리가 선언한 키 값을 줘야함. 아니면 오류
    // $arr_ass = array("key1" => "val1"
    //                 , "key2" => "val2"
    //                 , 2 => "val3"); 
    // echo $arr_ass[2]; 
    // var_dump($arr_ass);

    //다차원 배열
    $arr_temp = array(
                    array(1, 2, 3, 4)
                    ,array(5, 6, 7, 8)
                    ,array(
                        array(9, 10, 11)
                    )
                );
    // echo $arr_temp[0][2];
    // echo $arr_temp[2][0][1];
    // echo $arr_temp[1][3];

    //현업에서는 우리가 필요한 변수를 먼저 담고 값을 가져옴
    // $arr_temp_3 = $arr_temp[2][0];
    // var_dump($arr_temp_3);

    // $arr_temp_3_c = array(
    //                 array(9, 10, 11)
    //                 );

    //배열의 원소 삭제 : 함수unset() 키값 자체가 사라짐
    // $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
    // unset($arr_week[2]);
    // print_r($arr_week);

    //array_diff() 중복되지 않는 원소를 반환 
    //array 커지면 커질수록 속도 주의
    // $arr_diff_1 = array("a", "b", "c");
    // $arr_diff_2 = array("a", "b", "d");
    // $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
    // print_r($arr_diff);

    //배열의 정렬 : asort(), arsort(), ksort(), krsort();
    //asort(); 배열 오름차순 정렬
    // $arr_asort = array("b", "a", "d", "c");
    // asort($arr_asort);
    // print_r($arr_asort);

    //arsort(); 배열 내림차순 정렬
    // $arr_arsort = array("b", "a", "d", "c");
    // arsort($arr_arsort);
    // print_r($arr_arsort);

    //ksort(); 오름차순
    // $arr_ksort = array("key1" => "val1"
    //                 ,"key3" => "val2"
    //                 ,"key4" => "val4"
    //                 ,"key2" => "val3"
    //             ); 
    // ksort($arr_ksort);
    // print_r($arr_ksort);

    //krsort(); 내림차순
    // $arr_krsort = array("key1" => "val1"
    //                 ,"key3" => "val2"
    //                 ,"key4" => "val4"
    //                 ,"key2" => "val3"
    //             ); 
    // krsort($arr_krsort);
    // print_r($arr_krsort);

    // array의 사이즈를 반환하는 함수 count
    // echo count($arr_krsort);

    //foreach($array as $key => $val ){};
    // foreach($array as $val ){};
    $arr1 = array( "key1" => "val1"
                    , "key3" => "val2"
                    , "key4" => "val4"
                    , "key2" => "val3"
                ); 
    // foreach($arr1 as $key => $val)
    // {
    //     echo $key." : ".$val."\n";
    // }

    foreach($arr1 as $val)
    {
        echo $val."\n";
    }


?>