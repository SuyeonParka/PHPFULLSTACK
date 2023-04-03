<?php

/*------------------------------------------------
함수명 : my_db_conn
기능 : DB Connect
파라미터 : PDO      &$param_conn
리턴 : 없음
------------------------------------------------*/
function my_db_conn( &$param_conn ) //파라미터가 레퍼런스 참조(지금은 $obj_conn을 보고있음)
{
    $db_host    = "localhost";
    $db_name    = "employees";
    $db_user    = "root";
    $db_pass    = "root506";
    $db_char    = "utf8mb4";
    $db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_char;
    $db_option  = 
        array(
            PDO::ATTR_EMULATE_PREPARES      => false    
            ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION   
            ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
            );

    // PDO Class로 DB 연동
    $param_conn = new PDO($db_dns, $db_user, $db_pass, $db_option);
}


/*-------원래는 함수만 적음----------------------
$obj_conn = null;   // PDO Class

//  DB Connect
my_db_conn( $obj_conn );


$sql =
    " SELECT "
    ." * "
    ." FROM "
    ." employees "
    ." LIMIT :limit_start ";

$arr_prepare =
        array(
            ":limit_start" => 5
        );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();

var_dump( $result );

$obj_conn = null;   // DB Connection 파기
--------------------------------------------*/
?>