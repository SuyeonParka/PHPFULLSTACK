<?php
// 아래 쿼리로 결과를 출력하는 프로그램을 만들어 주세요.

/*
------------쿼리---------------
SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?


------------prepare 세팅값-------------
to_date : 9999-01-01
salary : 50000
limit : 5
--------------------------------------

*/
$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );// db에 작성할 쿼리 작성

$result = null;//그냥 초기값은 선언해 주는게 좋음

$stmt = $dbc->stmt_init();  //statement 세팅, mysqli_stmt_prepare를 사용하기 위한 객체를 초기화하고 리턴해 줌
$stmt->prepare(" SELECT emp_no, salary FROM salaries WHERE to_date =? AND salary >= ? ORDER BY salary DESC LIMIT ? "); // db의 질의할 쿼리를 작성
$stmt->bind_param("iii",$date, $num, $i); //prepared statement의 값을 세팅 
$date= 99990101;
$num = 50000;
$i = 5;

$stmt->execute();//db에 쿼리 질의 실행 

$result = $stmt->get_result(); //질의 결과를 저장

//row로 한줄씩 값을 불러와서 출력 그 다음줄을 읽고 row에 담고 출력 반복
while($row = $result->fetch_assoc())//질의 결과를 키값으로 가져오기 위해서 fetch_assoc로 가져와 row에 저장하고 row출력
{
    echo "emp_no : ".$row["emp_no"]." "."salary : ".$row["salary"]. "\n";
}

mysqli_close($dbc); 
// $dbc->close(); 다른 close 방법

/*
함수로 만들기
*/

function connect_salary($date, $num, $i)
{   
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );

    $result = null;

    $stmt = $dbc->stmt_init(); 
    $stmt->prepare(" SELECT emp_no, salary FROM salaries WHERE to_date =? AND salary >= ? ORDER BY salary DESC LIMIT ? "); // db의 질의할 쿼리를 작성
    $stmt->bind_param("iii", $date, $num, $i); 
    $stmt->execute();

    $result = $stmt->get_result();
    mysqli_close($dbc); //result 받고 빨리 닫아주는게 좋다고해서 빨리 닫음
    
    while($row = $result->fetch_assoc())
    {
        echo "emp_no : ".$row["emp_no"]." "."salary : ".$row["salary"]. "\n";
    }
}

$result_sal = connect_salary(99990101, 50000, 5);
echo $result_sal;





?>