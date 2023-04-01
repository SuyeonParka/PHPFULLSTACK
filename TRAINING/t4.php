<?php
/* <배열>

$arr_i = array(1,2 ,3);
var_dump($arr_i[1]);

<연상배열>
키 값 : std_no, std_name, std_age, std_gender

$arr_acc = array(
                "std_no"=> 11
                ,"std_name"=>"Suyeon"
                ,"std_age"=>27
                ,"std_gender"=>"F"
);

echo($arr_acc["std_name"]);

<다차원 배열>
-키 명으로 값을 추출해줌

$arr_acc = array(
    "std_no"=> 11
    ,"std_name"=>"Suyeon"
    ,"std_age"=>27
    ,"std_gender"=>"F"
    ,"std_secret_info"
        =>array(
                "std_city_no"=>0716
                ,"std_addr"=>"대구 중구 중앙대로"
                ,"std_top_secret"
                    =>array(
                            "std_top"=>"??"
                            )
                )   
);

echo ($arr_acc["std_secret_info"]["std_addr"]);
echo "\n";
echo($arr_acc["std_secret_info"]["std_top_secret"]["std_top"]);

<foreach>문 : 배열을 루프해서 연산을 하고 싶을 때
foreach (루프돌리고 싶은 배열 as $key => $value) 
{
    # code...
}

$arr_acc = array(
    "std_no"=> 11
    ,"std_name"=>"Suyeon"
    ,"std_age"=>27
    ,"std_gender"=>"F"
                );

echo count($arr_acc);
foreach ($arr_acc as $key => $value) 
{
    echo "$key : $value\n";
}

foreach ($arr_acc as $value) 
{
    echo "$value\n";
}


<문제>

루프를 돌려서 나이만 출력되게 프로그램을 만들어주세요.
$arr_acc = array(
    "std_no"=> 11
    ,"std_name"=>"Suyeon"
    ,"std_age"=>27
    ,"std_gender"=>"F"
                );

foreach ($arr_acc as $key => $val) 
{
    if($key === "std_age")
    {
        echo $val;
    }
}

echo "\n";
*/

foreach ($arr_acc as $key => $val) 
{
    if($key === "std_age")
    {
        $arr_acc["std_age"] = $val -10;
        // $arr_acc[$key] = $val -10;  //if 조건으로 키값 줬기 때문에 그냥 $key만 넣어줘도댐
        // $arr_acc["std_age"] += 10;
        // $val += 10;이 안되는 이유 : $arr_acc as $key => $val의 $key, $val은 독립적임
    }
}
print_r($arr_acc);













?>