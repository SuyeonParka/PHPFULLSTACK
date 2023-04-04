<?php

include_once("../Example/12_2_ex3_fnc_db_conn.php");

/*
아래 쿼리를 이용해서 DB접속 > data획득 후 출력해 주세요.
try-catch로 에러 처리를 해주세요.
에러가 날 경우의 해당 Exception의 에러메세지를 출력해 주세요
정상 종료일 경우 "정상종료"라고 출력해 주세요.
*/
$sql1 = " SELECT * FROM department ";
$sql2 = " SELECT * FROM dept_manager ";

try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn ); //인스턴트화?? db연결
    $sql1 = " SELECT * FROM department ";
    $sql2 = " SELECT * FROM dept_manager ";
    $stmt = $obj_conn->query( $sql1 );
    $result = $stmt->fetchAll();

    $stmt = $obj_conn->query( $sql2 );
    $result1 = $stmt->fetchAll();
    
    // var_dump( $result ); 사용자에게 보이면 안되기 때문에 
    // var_dump( $result1 ); 우리가 사용하고 나면 꼭 지워줘야함!!!!!(print, print_r도)
    echo "정상종료\n";
}
catch( Exception $e )
{
    echo "--------에러 발생---------\n";
    echo $e->getMessage();
    echo "\n--------에러 발생---------\n";
}
finally
{
    $obj_conn = null; //db 끊기(정상종료, 에러뜰때 둘다 끊어줘야돼서)
}




/* (하나씩 한 것)
//query1
try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql1 = " SELECT * FROM department ";
    // $sql2 = " SELECT * FROM dept_manager ";
    $stmt = $obj_conn->query( $sql1 );
    $result = $stmt->fetchAll();
    
    throw new Exception();

    var_dump( $result );
    echo "정상종료\n";
}
catch( Exception $e )
{
    echo "--------에러 발생---------\n";
    echo $e->getMessage();
    echo "\n--------에러 발생---------\n";
}
finally
{
    echo "Finally\n";
    $obj_conn = null;
}

echo "종료";

//query2
try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql2 = " SELECT * FROM dept_manager ";
    $stmt = $obj_conn->query( $sql2 );
    $result = $stmt->fetchAll();
    
    // throw new Exception();

    var_dump( $result );
    echo "정상종료\n";
}
catch( Exception $e )
{
    echo "--------에러 발생---------\n";
    echo $e->getMessage();
    echo "\n--------에러 발생---------\n";
}
finally
{
    echo "Finally\n";
    $obj_conn = null;
}

echo "종료";
*/
?>