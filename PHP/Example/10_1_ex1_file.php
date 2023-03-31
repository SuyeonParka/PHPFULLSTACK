<?php

// 파일을 여는 방법: fopen(파일위치, 파일여는방식)
// $f_food = fopen("./sam/food.txt", "r");  r : 읽기전용
// $f_food = fopen("./sam/food.txt", "w");  w : 쓰기전용(내용 삭제,백업필수, 포인터가 파일 시작부분-삭제되는 이유)
// $f_food = fopen("./sam/food.txt", "a");  a : 쓰기전용(포인터가 파일 끝부분, 내용 유지)

// var_dump($f_food);

//파일을 한 줄씩 읽어오는 방법 : fgets(open한 파일)
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);

//파일에 있는 글 다 불러오기
//1
//마지막 끝나는 위치에서 while문을 빠져나오게됨
// while ($line = fgets ($f_food))
//     print $line;

//2 다른 방법(선호)
//file end of 지금 포인터가 젤 끝이 아니면 false 끝이면 true
//true가 돌아왔을 때 !가 앞에 있으면 false (false도 마찬가지)
//false가 !돼서 true가 돼서(?) while문을 빠져나오게됨
// while(!feof($f_food))
// {
//     print fgets($f_food);
// }





$f_food = fopen("./sam/food.txt", "a");


//파일의 내용 추가 : fputs(open한 파일, 추가할 내용);
fputs($f_food, "\n돈가스1");
fputs($f_food, "\n돈가스2");
fputs($f_food, "\n돈가스3");

//파일 닫기 :fclose(open한 파일);
fclose($f_food);







?>