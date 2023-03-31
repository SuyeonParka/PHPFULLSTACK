<?php

/*
DB 연결 
$dbc로 php랑 db를 연결시켜주는 도로역할
*/
$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );


// var_dump($dbc);

// 쿼리 요청
$result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 1;");
// var_dump($result_query);

// $result_row = mysqli_fetch_row( $result_query );
// var_dump($result_row);
// $result_row= mysqli_fetch_row( $result_query );
// var_dump($result_row);

mysqli_close($dbc); //빨리 끝나는게 좋음(그래서 위로 올려줌, 리소스 많이 먹음)

/*
대체적으로 associate 씀, 키 값으로 가져와서 키 값으로 씀
한줄한줄 가져옴
$result_query에 db의 정보가 담겨있음
while로 돌다가 $temp_row에 값이 없으면 while문이 멈춤 
*/
while($temp_row = mysqli_fetch_assoc($result_query))
{
    echo $temp_row["emp_no"];
    echo $temp_row["first_name"];
}

/*
여기서 사용되는 while문은 데이터 값 안에서 움직이기 때문에 
시작값과 끝값을 정해주지 않아도 알아서 멈춤
*/




?>