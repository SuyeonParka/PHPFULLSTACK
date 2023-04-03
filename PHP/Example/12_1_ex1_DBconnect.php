<?php

/*
DB 연결 
$dbc로 php랑 db를 연결시켜주는 도로역할
*/
$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );


// var_dump($dbc);

// 쿼리 요청
// $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 1;");
// var_dump($result_query);

// $result_row = mysqli_fetch_row( $result_query );
// var_dump($result_row);
// $result_row= mysqli_fetch_row( $result_query );
// var_dump($result_row);

$i1 = "F";
$i2 = 10010;
$i3 = 5;
$result = null;
/*
Prepared Statement : 
*/
$stmt = $dbc->stmt_init(); //statement 세팅
$stmt->prepare("SELECT emp_no, first_name FROM employees WHERE gender =? AND emp_no <= ? LIMIT ?;"); // db의 질의할 쿼리를 작성
$stmt->bind_param("sii",$i1, $i2, $i3); //Prepared 세팅, 레퍼런스 참조는 매직넘버로 줄 수 없음(ex : 5)
$stmt->execute(); //db에 쿼리 질의 실행

/*-----------------------------------질의 결과를 우리가 지정한 변수에 담아 사용하는 방법
// $stmt->bind_result( $col1, $col2); // 질의 결과를 각 아규먼트(이 괄호 안에 있는 애들)에 저장을 위한 세팅
// $stmt->fetch(); //bind_result에서 세팅한 아규먼트의 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
// var_dump($col1, $col2);
*/

/*--------------이하 연상배열로 가져오는 방법 -----------*/
$result = $stmt->get_result(); //질의 결과를 저장
//fetch를 loop로 돌려서 모든 질의 결과를 가져오는 방법
while($row = $result->fetch_assoc()) //질의 결과를 키값으로 가져오기 위해서 fetch_assoc로 가져와 row에 저장하고 row출력
{
    // var_dump($row["emp_no"]);
    echo $row["first_name"]." ".$row["emp_no"]. "\n";
}

mysqli_close($dbc); //빨리 끝나는게 좋음(그래서 위로 올려줌, 리소스 많이 먹음)



/*
대체적으로 associate 씀, 키 값으로 가져와서 키 값으로 씀
한줄한줄 가져옴
$result_query에 db의 정보가 담겨있음
while로 돌다가 $temp_row에 값이 없으면 while문이 멈춤 
*/


/*
while($temp_row = mysqli_fetch_assoc($result_query))
{
    echo $temp_row["emp_no"];
    echo $temp_row["first_name"];
}


여기서 사용되는 while문은 데이터 값 안에서 움직이기 때문에 
시작값과 끝값을 정해주지 않아도 알아서 멈춤
*/




?>