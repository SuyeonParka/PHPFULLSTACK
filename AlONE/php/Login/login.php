<?php

$userid = $_POST['username'];
$password = $_POST['username'];


?>








<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="my_form" method="" action="">
            <h1>Login</h1>
            <input type="text" name = "userid" id="log_id" placeholder="id" required>
            <br>
            <br>
            <input type="text" name = "password" id="log_pw" placeholder="password" required>
            <br>
            <br>
            <span>
                <input style='zoom:0.7;' type="checkbox" class="stay">
                로그인 상태 유지
            </span>
            <br>
            <br>
            <input type="submit" value="Login" class="btn">
            <br>
            <br>
            <span><a href="">아이디 저장하기</a></span>
            <span class="stick">|</span>
            <span><a href="">ID/PW 찾기 </a></span>
        </form>
    </div>
</body>
</html>