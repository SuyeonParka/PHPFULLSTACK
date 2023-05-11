<?php

session_name("Kim");
session_start(); // 사용하기 전에 꼭 해줘야됨

var_dump($_SESSION);
var_dump($_COOKIE); //쿠키도 같이 함 찍어봄
var_dump("세션ID : ".session_id()); // sessionID를 반환
