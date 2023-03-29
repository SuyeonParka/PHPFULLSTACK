<?php
//매개변수 = 파라미터


//void 함수(리턴값이 없는)
//ex) 종이에 값을 적는다
function sum($n1, $n2) {
    echo $n1 + $n2;
    // return;(이렇게 옆에 아무것도 적어주면 안됨)
}

// sum(1,2); //echo 적으면 안됨


//return 함수(리턴값이 있는)
//ex) 값을 주면 다시 나한테 던져줌
//return키워드가 있다고 다 return함수는 아님
//(생략해도 들어감-호출한곳으로 다시 들어가야함)
function sum2($n1, $n2) {
    return $n1 + $n2;
}

sum(1,2);
echo "\n";
sum(2,4);
echo "\n";
// echo sum2(3,6);
$result = sum2(3,6);
echo $result. "\n";
sum($result, $result);

?>