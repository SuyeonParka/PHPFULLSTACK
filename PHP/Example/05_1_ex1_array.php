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
    $arr_temp_3 = $arr_temp[2][0];
    // var_dump($arr_temp_3);

    $arr_temp_3_c = array(
                    array(9, 10, 11)
                    );

    //배열의 원소 삭제 : 함수unset() 키값 자체가 사라짐
    $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
    unset($arr_week[2]);
    print_r($arr_week);
?>