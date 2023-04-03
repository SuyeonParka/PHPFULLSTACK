<?php
$db_host    = "localhost";
$db_name    = "employees";
$db_user    = "root";
$db_pass    = "root506";
$db_char    = "utf8";
$db_dns     = "mysql:host".$db_host.";dbname=".$db_name.";charset=".$db_char;
$db_option  = 
    array(
        PDO::ATTR_EMULATE_PREPARES      => false    //ATTR_EMULATE_PREPARES 기본적으로 트루로 설정, 여기선 database껄 쓰겠다.라는 뜻(DB의 prepared statement기능을 사용하도록 설정)
        ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION   //  PDO Exception을 throws하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC //연상배열로 fetch를 하도록 설정
    );
// PDO Class로 DB 연동
$obj_conn = new PDO($db_dns, $db_user, $db_pass, $db_option);

// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요.
$sql = 
    " SELECT sal.salary, sal.emp_no, emp.birth_date
    FROM salaries AS sal
        INNER JOIN employees AS emp
            ON sal.emp_no = emp.emp_no
    WHERE (
        sal.emp_no = :emo_no1
        OR sal.emp_no = :emp_no2
        )
    AND sal.to_date = DATE(99990101); ";

//emp_no를 직접적으로 10001이렇게 적는건 별로임 그래서 위 방법으로 씀

/*
<teacher's> 수정의 용의성 때문에 이렇게 작성함(맨앞과 맨뒤 공백 주기)
$sql = 
    " SELECT "
    ." sal.salary"
    ." ,emp.emp_no "
    ." , emp.birth_date"
    ." FROM "
    ." employees emp"
    ." INNER JOIN salaries sal"
    ."      ON emp.emp_no = sal.emp_no "
    ." WHERE "
    ." ( "
    ."      emp.emp_no = 10001 "
            OR emp.emp_no = 10002 "
    ."  ) "
    ." AND sal.to_date >= now()";

*/

$arr_prepare = 
    array(
        ":emp_no1" => 10001
        ,":emp_no2" => 10002
    );

$stmt = $obj_conn->prepare( $sql ); //Prepare Statement를 생성(쿼리를 넣으면서 같이 생성도 해줌)
$stmt->execute( $arr_prepare ); //쿼리 실행
$result = $stmt->fetchAll();    //쿼리 결과를 fetch
// var_dump( $result );
foreach( $result as $val )
{
    echo $val["salary"], "\n";
}

$obj_conn = null;
// $stmt->bindValue();

// $row = $stmt->fetch();

// $row = $stmt->fetch();

// echo "<pre>";
// print_r($row);
// echo "</pre>";

/*
foreach( $result as $val )
{
    echo $val["salary"], "\n";
}
<위의 $result 배열의 상세 구조>
$result = 
    array(
        array(
            "salary" => 38735
            ,"emp_no" => 10001
            ,"birth_date" => "1953-09-02"
        )
        ,array(
            "salary" => 72527
            ,"emp_no" => 10002
            ,"birth_date" => "1964-06-02"
        )
    )
*/
?>