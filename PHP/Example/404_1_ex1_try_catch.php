<?php

include_once("./12_2_ex3_fnc_db_conn.php");

/*--------------try-catch문 : 에러처리를 하기위한 문법-----------
try 
{
    //우리가 실행하고 싶은 소스코드를 작성
} 
catch (\Throwable $th) 
{
    // 에러가 발생 했을 때 실행되는 소스코드를 작성
    // 보통 Exception $e를 사용, error를 $e에 담은 것
}
finally // 실패하든 성공하든 무조건 작동함
{
    // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
}
----------------------------------------------------------------*/

try 
{
    $obj_conn = null; //초기값
    my_db_conn( $obj_conn );
    $sql = " SELECT * FROM employees WHERE emp_no = 10001 ";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchAll(); //fetch로 0건 가져옴

    if( count( $result ) === 0 )
    {
        // throw Exception : 에러를 강제로 일으키는 구문
        // throw new Exception("쿼리 결과 0건");
        throw new Exception("E99");
    }

    var_dump( $result );
    echo "try\n";
}
catch( Exception $e )
{   
    echo "--------에러 발생---------\n";
    if( $e->getMessage() === "E99" )
    {
        echo "데이터 0건";
    }
    else 
    {
        echo $e->getMessage();
    }
    echo "\n--------에러 발생---------\n";

    /*
    echo "--------에러 발생---------\n";    위에꺼 이렇게 써도 됨
    echo $e->getMessage();
    echo "\n--------에러 발생---------\n";
    */
}
finally
{
    echo "Finally\n";
    $obj_conn = null; //파기, db 사용 후 받아주는거
}

echo "종료";




?>
