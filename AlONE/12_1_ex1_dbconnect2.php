<?php

$dbcon = mysqli_connect("localhost", "root", "root506", "employees", 3306);
$result_query = mysqli_query($dbcon, "SELECT emp_no, concat(first_name,' ', last_name)AS full_name, gender, birth_date
                                        FROM employees
                                        WHERE emp_no <= 10000");

$flg_cnt = false;
while($tmp_row = mysqli_fetch_assoc($result_query))
{
    echo implode(" ", $tmp_row), "\n";
    $flg_cnt = true;
}
if(!$flg_cnt)
{
    echo "데이터가 0건 입니다.";
}

/* 
데이터가 있으면 와일 작동 근데 flg트루로 넣어주는데
if에 !가 있어서 false로 바꿔어서 echo가 실행됨
위에 $flg_cnt = false;를 넣어주면 while이 실행이 안되고
바로 if문으로 넘어가는데 if의 !와 false가 만나면 true가 되니까
if문이 조건에 맞으니까 실행이된다는 말
*/

?>