<?php
// 1~45까지의 숫자가 랜덤으로 나오게 하는 함수를 만드시오.
// 숫자가 반복되면 안됨.
// 앞 숫자와 비교를 해서 겹치지 않게 다른 숫자가 나오게 하는 방법
//if 문 사용 
// $temp를 써서 앞의 숫자가 아니고 다른 숫자가 나오는 거 && 둘다 적용돼야하니까
// 첫번째는 1~45 중 랜덤
// 두번째는 1~44 중 랜덤. 단, 첫번째랑 같으면 45
// 세번째는 1~43 중 랜덤. 단, 첫번째랑 같으면 45, 두번째랑 같으면 44
// 네번째는 1~42 중 랜덤. 단, 첫번째랑 같으면 45, 두번째랑 같으면 44, 세번째랑 같으면 43
// ... 이런 식으로 n번째까지 반복

// $arr = array();

function my_lotto($arr)
{
    for ($i=1; $i < 7; $i++) //로또 번호 6개가 나와야 돼서
    { 
        $arr[$i] = rand(1,45);
        for($k=0; $k<$i; $k++) 
        {
            if($arr[$i] !== $arr[$i])      //값이 같지 않다면 랜덤 값 출력
            {
                echo $arr[$i];  
            }     
        }
    }
    return $arr;
}

$result = my_lotto($arr);
print_r($result);







// function my_lotto1($dream)
// {
   
    
//     foreach ($dream as $key => $val) 
//     {
//         if($dream < $i && $dream !== $val)
//         {
//             $dream = rand(0,45);
//         }

//     }
//     return $dream;
// }

// $result = my_lotto($arr);
// print_r($result);
?>