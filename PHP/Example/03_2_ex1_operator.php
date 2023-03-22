<?php
    // 1. 산술연산자 

    // echo 1 + 1;
    // echo "\n", 1 - 1;
    // echo "\n", 2 * 3;
    // echo "\n", 10 / 2;
    // echo "\n", 9 % 7;
    // echo "\n", 10 - 5 * 8;
    // echo "\n\n";
    // 2.증가 감소 연산자
    // $num1 = 1;
    // $num2 = 1;

    // echo ++$num;
    // echo $num1 = $num +1;

    // echo $num1++, "\n";
    // echo $num1;
    
    // 3. 산술 대입 연산자
    // $num = 1;
    // $num = $num+1;
    // $num += 1; // 2번째 식을 3번째 식으로 간략하게 표현

    // $num2 = $num2 - 1;
    // $num -=1;

    // $num2 = $num2 * 1;
    // $num *=1;

    // $num2 = $num2 / 1;
    // $num /=1;

    // $num2 = $num2 % 1;
    // $num %=1;


    // $num1 = 1;
    // $num1 = $num+1;
    // $num2 += 1;
    // $num2 += 1;
    
    // echo $num1, " ",$num2;

    //산술 연산자를 이용해서 계산해주세요.
    // $tng_num = 10;

    // $tng_num에 10을 더해주세요
    // $tng_num = $tng_num + 10;
    // $tng_num += 10;

    //5로 나눠주세요.
    // $tng_num = $tng_num / 5;
    // $tng_num /= 5;

    // 4를 빼주세요.
    // $tng_num = $tng_num - 4;
    // $tng_num -= 4;

    //7로 나눈 나머지를 구해주세요.
    // $tng_num = $tng_num % 7;
    // $tng_num %= 7;

    //3을 곱해주세요.
    // $tng_num = $tng_num * 3;
    // $tng_num *= 3;

    //4. 비교 연산자
    // $t1 = 1;
    // $t2 = '1';
    // var_dump(1>2);
    // var_dump(1<2);
    // var_dump(1>=2);
    // var_dump(1<=2);
    // var_dump(1 == 1);
    // var_dump($t1 == $t2);
    // var_dump(1 === '1');
    // var_dump($t1 === $t2);

    // var_dump($t1 != $t2);

    //5. 논리 연산자
    //and 
    // var_dump( 1 == 1 && 2 == 3);
    //or
    // var_dump( 1 == 2 || 2 == 3);
    //not
    // var_dump( !(1 == 1) );

    // var_dump(16<<1);
    // $hhh = 12;

    //연습문제 7번(p.64)
//     $i = 2147483647;
//     echo $i++;

//     $i = 9223372036854775807;
//     echo($i+=1);
// echo "\n";
//     $i2 = 9223372036854775807;
//     echo($i2++);

    // echo PHP_INT_MAX;

    //삼항 연산자
    // echo 1 > 2 ? '참' : '거짓';

    

    $result = 5 + 3 * 2 - (5 + 4) % 2;
    echo($result);

    $value = 99991;
    print $value."<BR>";
    $value++;
    $value=$value * 10;
    print $value."<BR>";
    

?>