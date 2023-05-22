<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names Home</title>
</head>
<body>
    {{-- blade 파일의 주석처리는 이런식으로 함 --}}
    <a href="/names">names</a>
    <br>
    <br>
    <a href="{{url('/names');}}">names</a>
    <br>
    <br>
    <a href="{{route('names.index');}}">names</a>
    {{-- 라라벨에서 추천하는 방식 --}}
</body>
</html>