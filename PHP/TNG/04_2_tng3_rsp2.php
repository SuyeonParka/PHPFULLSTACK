<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">  
    <label for="roscpa">가위바위보</label>
    <input type="text" id="roscpa" name="roscpa">
    <input type="submit">
    </form>
    <!-- form은 유저가 작성한 값을 백엔드로 넘어감 -->
</body>
</html>

<?php
$rocspa = (int)$_POST['rocspa'];
// var_dump($_post);
// if( is_null($roscpa)) {$roscpa =0;}
//0가위 1바위 2보
$hand = "바위";
$game = rand(0,2);
$g ="";

if ($hand === '가위')
{
    if ($game === 0)
    {
        $g= '비김';
    }
    else if ($game === 1)
    {
        $g= '짐';
    }
    else
    {
        $g= '이김';
    }
}
else if ($hand === '바위')
{
    if ($game === 0)
    {
        $g = '이김';
    }
    else if ($game === 1)
    {
        $g = '비김';
    }
    else 
    {
        $g = '짐';
    }
}
else if ($hand === '보')
{
    if ($game === 0)
    {
        $g = '짐';
    }
    else if ($game === 1)
    {
        $g = '이김';
    }
    else 
    {
        $g = '비김';
    }
}    

echo '결과: '.$g.' 내가 낸 값:'.$hand.' 컴이 낸 값:'.$game;


?>
