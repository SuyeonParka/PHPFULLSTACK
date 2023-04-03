<?php

include_once("../Example/12_2_ex3_fnc_db_conn.php");

$obj_conn = null;

my_db_conn( $obj_conn );

/*
우리가 작성한 DB Connect 함수를 이용해서 아래 데이트를 출력해주세요.
*/
// 1. 전체 월급의 평균
$sql =
    " SELECT "
    ." AVG(salary) "
    ." FROM "
    ." salaries ";

$stmt = $obj_conn->prepare( $sql );
$stmt->execute();
$result = $stmt->fetchAll();

var_dump( $result );

$obj_conn = null;


// // 2. 새로운 사원 정보를 employees 테이블에 등록해주세요
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

$arr_prepare = array(
    ":emp_no" => 510000
    ,":birth_date" => 20200101
    ,":first_name" => "SS"
    ,":last_name" => "PPP"
    ,":gender" => "F"
    ,":hire_date" => 99000101
    );
$stmt = $obj_conn->prepare( $sql_new );
$result_new = $stmt->execute( $arr_prepare );
$obj_conn->commit();

// var_dump( $result_new );

$obj_conn = null;



// // 3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍"으로 변경해주세요.
$sql_up =
        " UPDATE "
        ." employees "
        ." SET "
        ." first_name = :first_name "
        .", last_name = :last_name "
        ." WHERE "
        ." emp_no = 510000 ";


$arr_prepare_1 = array(
    ":first_name" => "길동"
    ,":last_name" => "홍"
);

$stmt = $obj_conn->prepare( $sql_up );
$result_up = $stmt->execute( $arr_prepare_1 );
$obj_conn->commit();
$result_up = $stmt->fetchAll();

var_dump( $result_up );

$obj_conn = null;

// // 4. 2에서 등록한 사원을 삭제해 주세요.
$sql_del =
        " DELETE FROM employees "
        ." WHERE "
        ." emp_no = 510000 ";


$stmt = $obj_conn->prepare( $sql_del);
$result_del = $stmt->execute();
$obj_conn->commit();

// var_dump( $result_del );

$obj_conn = null;


/*
$result_del = $stmt->fetchAll(); fetch는 select 구문에서 가져올 때에만 사용
*/


?>
