<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home!</h1>
    <br>
    <br>
    <br>
    <form action="/method" method="POST">
        @csrf
        <button type="submit">POST</button>
    </form>
    <form action="/method" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">PUT</button>
    </form>
    <form action="/method" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
</body>
</html>

<!-- csrf공격 : 사용자가 우리 서버에 요청하고 유저에게 응답할때 중간에 
공격자가 정보를 탈취해서 가져가는 공격, 가장 흔하고 기초적인 보안문제 -->