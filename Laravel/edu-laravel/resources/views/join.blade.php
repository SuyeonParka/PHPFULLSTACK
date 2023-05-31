<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
</head>
<body>
    <form name="login" action="{{route('Join.store')}}" method="post">
        @csrf
        <input type="text" name="name">이름
        <br>
        <input type="text" name="id">아이디
        <br>
        <input type="text" name="pw">비밀번호
        <br>
        <input type="button" name="submit">제출하기
        <br>
    </form>
</body>
</html>