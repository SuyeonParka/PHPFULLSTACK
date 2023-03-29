<?php
$arr = array(5, 10, 7, 3, 1);

function my_max($arr)
{   
    $temp = $arr[0];
    for ($i=1; $i < count($arr) ; $i++) 
    { 
        if($temp < $arr[$i])
        {
            $temp = $arr[$i];
        }
    }
    return $temp;
}

echo my_max($arr);

// $temp = $arr[0]을 줌으로써 디폴트 값을 배열의 0번째 키에 있는 5로줌
// for문으로 반복해서 다른 위치에 있는 다른 값들과 비교를 함
// $i를 1로 준이유는 굳이 0을 넣어줘서 5랑 5가 비교할 일을 없애기 위해서
// count($arr)은 배열에 들어있는 값이 5개라서 5
// if문으로 만약에 $temp(=$arr[0]=5)가 $arr[i](1,2,3,4)보다 작다면 
// $temp값이 처음에 5와 10이 비교 할때 10이 더 크니까 그 다음 적용되는
//$temp값이 10그리고 10이 그 다음 7과 비교하여 더 큰 값이 들어가서 
//계속 비교 반복함
//마지막에 들어가는 $temp값을 리턴

echo "\n";

//밑에는 현업에서 주석쓰는 방법 예시(쌤이 적어줌)
// 이름 : my_name
//파라미터 : Array  $arr //적는 순서가 있는듯
//리턴 : Int $temp
//기능 : 배열에서 max 값을 리턴
function my_min($arr)
{
    $temp = $arr[0];
    for ($i=1; $i < count($arr); $i++) { 
        if($temp > $arr[$i])
        {
            $temp = $arr[$i];
        }
    }
    return $temp;
}

echo my_min($arr);
//비교 반복해야하는 건 max주는 방법과 같음
//if문을 이용해서 처음에 기본값으로 준 5값이 그다음 수랑 비교가 됐을때
//더 작은 값이 다음 $temp값으로 적용이 되기 때문에 다음다음으로 
//계속 비교를 했을 때 작은 수를 찾아내는 것을 반복함
//마지막에 들어가는 $step값을 리턴함
//count를 안에 쓰는 이유는 다른 곳에서 쓸일이 없고 쓰고 버리는 느낌으로 쓰기 위해서

//쌤이한거
//foreach를 써서 루프가 다 돌아서 비효율적
//루프 돌 때마다 is_null($res_max), $res_max < $val 둘다 체크해줘야해서 비효율적
function my_max1($param_arr)
{
    $res_max = null;
    foreach ($param_arr as $val)
    {
        if(is_null($res_max) || $res_max < $val)
        {
            $res_max = $val;
        }
    }
    return $res_max;
}

function my_min1($param_arr)
{
    $res_min = null;
    foreach ($param_arr as $val)
    {
        if(is_null($res_min) || $res_min > $val)
        {
            $res_min = $val;
        }
    }
    return $res_min;
}
?>