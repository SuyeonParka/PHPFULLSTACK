<?php
// 우리가 작성한 DB Connect 함수를 이용해서 아래 데이터를 출력해주세요.


include_once("../Example/12_2_ex3_fnc_db_conn.php");


// 1. 전체 월급의 평균
$sql =
    " SELECT "
    ." AVG(salary) "
    ." FROM "
    ." salaries ";

$obj_conn = null;
my_db_conn( $obj_conn );
$stmt = $obj_conn->query( $sql );   // query 매소드 방법
// $stmt = $obj_conn->prepare( $sql ); prepare 매소드 방법 
// $stmt->exeute();
$result = $stmt->fetchAll(); //테이블에 정보를 다 가지고오는거

var_dump( $result );

// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요
$sql_new = 
        " INSERT INTO employees( "
        ." emp_no "
        ." ,birth_date"
        ." ,first_name"
        ." ,last_name"
        ." ,gender"
        ." ,hire_date"
        ." ) "
        ." VALUES "
        ." ( "
        ." :emp_no "
        ." ,:birth_date"
        ." ,:first_name"
        ." ,:last_name"
        ." ,:gender"
        ." ,:hire_date"
        ." ) ";

$arr_prepare = 
    array(
        ":emp_no"       => 510000
        ,":birth_date"  => "2020-01-01"
        ,":first_name"  => "SS"
        ,":last_name"   => "PPP"
        ,":gender"      => "F"
        ,":hire_date"   => "99000101" //보통 문자열로 씀(프로그램에 따라 다름)
        );

$obj_conn = null; //초기화 선언(해주는게 좋음) 예시)$int_a = 0; $str_a = "" 실수 방지를 위해
my_db_conn( $obj_conn );
$stmt = $obj_conn->prepare( $sql_new );
$stmt->execute( $arr_prepare );
$obj_conn->commit();
$obj_conn = null; //파기, pdo class 접속을 끊을 때 사용(object 초기화)
// var_dump( $result_new );


// 3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍"으로 변경해주세요.
$sql_up =
        " UPDATE "
        ." employees "
        ." SET "
        ." first_name = :first_name "
        .", last_name = :last_name "
        ." WHERE "
        ." emp_no = :emp_no ";


$arr_prepare_1 = 
    array(
        ":first_name" => "길동" //공백 주의
        ,":last_name" => "홍"
        ,":emp_no"    => 500000
        );

$obj_conn = null;
my_db_conn( $obj_conn );
$stmt = $obj_conn->prepare( $sql_up );
$result_up = $stmt->execute( $arr_prepare_1 );
$obj_conn->commit();
// $result_up = $stmt->fetchAll(); //얘는 업뎃한 정보를 불러와야함 (쌤은 없어도 됨)
$obj_conn = null;


// // 4. 2에서 등록한 사원을 삭제해 주세요.
$sql_del =
        " DELETE FROM employees "
        ." WHERE "
        ." emp_no = :emp_no ";

$arr_prepare =
        array(
            ":emp_no" => 500000
        );

$obj_conn = null;
my_db_conn( $obj_conn );
$stmt = $obj_conn->prepare( $sql_del );
$stmt->execute( $arr_prepare );
$obj_conn->commit();
$obj_conn = null;

// var_dump( $result_del );

// /*
// $result_del = $stmt->fetchAll(); fetch는 select 구문에서 가져올 때에만 사용
// */


?>
