<?php

$db_host    = "localhost";
$db_name    = "employees";
$db_user    = "root";
$db_pass    = "root506";
$db_char    = "utf8mb4";
$db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_char;
$db_option  = 
    array(
        PDO::ATTR_EMULATE_PREPARES      => false    //ATTR_EMULATE_PREPARES 기본적으로 트루로 설정, 여기선 database껄 쓰겠다.라는 뜻(DB의 prepared statement기능을 사용하도록 설정)
        ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION   //  PDO Exception을 throws하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC //연상배열로 fetch를 하도록 설정
    );

$obj_conn = new PDO($db_dns, $db_user, $db_pass, $db_option);

$sql =
    " SELECT "
    ." sal.salary "
    ." ,sal.emp_no "
    ." , emp.birth_date "
    ." FROM "
    ." salaries sal "
    ." INNER JOIN employees emp "
    ."      ON sal.emp_no = emp.emp_no "
    ." WHERE "
    ." ( "
    ."      sal.emp_no = :emp_no1"
    ."      OR sal.emp_no = :emp_no2 "
    ." ) "
    ."  AND sal.to_date >= now() ";

$arr_prepare =
    array(":emp_no1" => 10001
            ,":emp_no2" => 10002
);

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();
foreach ($result as $val) 
{
    echo $val["salary"],"\n";
}

$obj_conn = null;

?>