<?php

session_name("Kim");
session_start();

// session 파기(서버에 저장된 세션의 연결을 끊음)
// session_destroy();

// var_dump($_SESSION);

// session 정보 삭제
unset($_SESSION["del"]);    //세션ID는 살아있는데 나머지 정보 삭제, 세션항목 하나하나 삭제
// session_unset(); //세션 정보 전체 삭제