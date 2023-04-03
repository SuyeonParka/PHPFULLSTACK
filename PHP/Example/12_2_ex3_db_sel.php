<?php

include_once("./12_2_ex3_fnc_db_conn.php"); //사람이 어디서 얘를 인크루드했는지 알지못하니 중복을 막기위해서


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


?>
