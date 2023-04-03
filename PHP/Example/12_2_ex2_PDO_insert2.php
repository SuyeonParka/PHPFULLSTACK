<?php
$db_host    = "localhost";
$db_name    = "test2";
$db_user    = "root";
$db_pass    = "root506";
$db_char    = "utf8mb4";
$db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_char;
$db_option  = 
    array(
        PDO::ATTR_EMULATE_PREPARES      => true    //ATTR_EMULATE_PREPARES 기본적으로 트루로 설정, 여기선 database껄 쓰겠다.라는 뜻(DB의 prepared statement기능을 사용하도록 설정)
        ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION   //  PDO Exception을 throws하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC //연상배열로 fetch를 하도록 설정
    );

$obj_conn = new PDO($db_dns, $db_user, $db_pass, $db_option);

//dept_manager에 dept_no와 dept_name에 자기이름 넣기
$sql =
    " INSERT INTO departments( "
    ." dept_no "
    ." ,dept_name "
    ." ) "
    ." VALUES( "
    ." :dept_no "
    ." ,:dept_name "
    ." ) ";


$arr_prepare = array(
                    ":dept_no" => "d028"
                    ,":dept_name" => "PHP풀스택28"
                    );

echo "tran : " . $obj_conn->beginTransaction();
$stmt = $obj_conn->prepare( $sql );


$result = $stmt->execute( $arr_prepare );
echo "commit : " . $obj_conn->commit();


$obj_conn = null; //DB 파기





?>