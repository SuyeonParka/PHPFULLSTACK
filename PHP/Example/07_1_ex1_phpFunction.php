<?php

// min, max, floor, round, ceil, rand
// echo floor(4.9), "\n";
// echo round(4.5), "\n";
// echo ceil(4.1), "\n";
// echo min(array(1, 2, 3)), "\n";
// echo max(array(1, 2, 3)), "\n";
// echo rand(0,2);

//날짜 관련 함수
// echo date('Y-m-d H:i:s B'), "\n";
// echo date('y-M-D h:I:S');

//고정밀도 함수
// echo 100000000000;

//난수 함수(랜덤)
// echo mt_rand(0, 3);

// OS, OHO, GLOBALS 정보 상수, 변수 및 함수
// echo PHP_OS, "\n";
// echo PHP_VERSION, "\n";
// var_dump ($GLOBALS);
// var_dump(phpinfo());

//상수 선언(명명규칙 : 상수명은 꼭 대문자로 작성한다
//상수인지 구분하기 쉽기 위해서 대문자 사용, 실수를 줄이기 위해서 사용함
define("INT_ONE", 1);
echo INT_ONE;
?>