<?php
    //1. while문
    // while(조건)
    // {
    //     반복하고 싶은 처리
    // }

    // $i = 0;
    // while($i < 10)
    // {
    //     echo $i++;
    // }

    // 내가 한거 작동안함^^
    // $i = 1;
    // $value = 1;
    // while($i < 10)
    // {
    //     while ($value === 2)
    //     echo '2 *'.$i++ '=' $i;
    //     break;
    // }

    // 쌤이 만든거
    // $dan = 2;
    // $num = 1;
    // while($num < 10)
    // {
    //     $result = $dan." * ".$num." = ".$dan * $num. "\n";
    //     echo $result;
    //     $num++;
    // }

    // //구구단 9단까지 내가한거
    // $gugu = 2;
    // $num = 1;
    // while($gugu <= 9)
    // {   
    //     ++$gugu;
    //     num = 1;
    //     while($num <= 9)
    //     {
    //         ++$num;   
    //         $result = $gugu." * ".$num." = ".$gugu * $num. "\n";
    //         echo $result;     
    //     }
    // }

    //쌤이한거
    // $dan = 2;
    // $num = 1;
    // while ( $dan < 10)
    // {   
    //     echo $dan, "단"."\n";
    //     $num = 1; //초기화
    //     while($num < 10)
    //     {
    //         $result = $dan."*".$num." = ".$dan * $num."\n";
    //         echo $result;
    //         ++$num;
    //     }
    //     ++$dan;       
    // }

    // 19단
    $dan = 2;
    $num = 1;
    $max_dan = 19;
    while ( $dan <= $max_dan)
    {   
        echo $dan, "단"."\n";
        $num = 1; //초기화
        while($num <= $max_dan)
        {
            $result = $dan."*".$num." = ".$dan * $num."\n";
            echo $result;
            ++$num;
        }
        ++$dan;       
    }

?>
