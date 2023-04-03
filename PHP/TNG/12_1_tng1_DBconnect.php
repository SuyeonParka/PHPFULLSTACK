<?php
// 사번이 10005 이하 사원의 사번, 이름(성, 이름), 성별, 생일
// db 연결
$dbcon = mysqli_connect("localhost", "root", "root506", "employees", 3306);
$result_query = mysqli_query($dbcon, "SELECT emp_no, concat(first_name,' ', last_name)AS full_name, gender, birth_date
                                        FROM employees
                                        WHERE emp_no <= 10000");
/* 쿼리 요청(Me)
$result_query = mysqli_query($dbcon, "SELECT emp_no, concat(first_name,' ', last_name)AS full_name, gender, birth_date
                                        FROM employees
                                        WHERE emp_no <= 10005");

(Teacher)
$sql = 
    "
    SELECT
        emp_no
        ,concat(last_name, ' ', first_name) full_name
        ,gender
        ,birth_date
        FROM
            employees
        WHERE
            emp_no <= 10005;

mysqli_close($dbcon);

/* (ME)
while($temp_row = mysqli_fetch_assoc($result_query))
    {
        echo $temp_row["emp_no"];
        echo $temp_row["full_name"];
        echo $temp_row["gender"];
        echo $temp_row["birth_date"],"\n";
    }

(Teacher)   
while($temp_row = mysqli_fetch_assoc($result_query))
    {
        echo implode( " ", $temp_row),"\n";
    }

*/

/* 1번 방법 mysqli_num_row()사용 방법
$result_query = mysqli_query($dbcon, $result_query);
if($mysqli_num_rows($result_query)===0)
{
    echo "데이터가 0건 입니다.";
}
else 
{
    echo implode( " ", $temp_row),"\n"; 
}


2번 방법(플레그 이용 방법/쌤이 현업에서 쓴 방법)
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










//if문 넣기 연습한 것
/*
$arr =  mysql_fetch_array($result_query);
if ($arr[0] == "")
{
    echo "값 없음요";
}
else
{
    while($temp_row = mysqli_fetch_assoc($result_query))
    {
        echo $temp_row["emp_no"],"\n";
        echo $temp_row["full_name"],"\n";
        echo $temp_row["gender"],"\n";
        echo $temp_row["birth_date"];
    }
}



if($temp_row !== mysqli_fetch_assoc($result_query))
{
    echo "출력값이 없습니다.";
}
else 
{
    while ($temp_row = mysqli_fetch_assoc($result_query)) 
    {
        echo $temp_row["emp_no"],"\n";
        echo $temp_row["full_name"],"\n";
        echo $temp_row["gender"],"\n";
        echo $temp_row["birth_date"];
    }     
}



if($mysqli_num_rows($result_query) !== 0)
{
    while ($temp_row = mysqli_fetch_assoc($result_query)) 
    {
        echo $temp_row["emp_no"],"\n";
        echo $temp_row["full_name"],"\n";
        echo $temp_row["gender"],"\n";
        echo $temp_row["birth_date"];
    }     
}
else 
{
    echo "출력값 없어요";
}

while($temp_row = mysqli_fetch_assoc($result_query))
{
    if($temp_row = true)
    {
        echo $temp_row["emp_no"],"\n";
        echo $temp_row["full_name"],"\n";
        echo $temp_row["gender"],"\n";
        echo $temp_row["birth_date"];
    }
    else 
    {
        echo "출력값 없어요";
    } 
}


while($temp_row = mysqli_fetch_assoc($result_query))
{
    if($temp_row === false )
    {
        echo "출력값 없어요";
    }
    else 
    {
        echo $temp_row["emp_no"],"\n";
        echo $temp_row["full_name"],"\n";
        echo $temp_row["gender"],"\n";
        echo $temp_row["birth_date"];
    }
}
*/

?>