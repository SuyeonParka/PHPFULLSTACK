<?php

//문자열 합치기
// $str_1 = "aaa";
// $str_2 = "bbb";
// $str_sum = $str_1.$str_2;
// echo $str_sum;

// 대소문자 변환
// $str_en = "abcd efgh";

// echo strtolower($str_en), "\n"; //소문자로 변환

// echo strtoupper($str_en), "\n"; //대문자로 변환

//맨 앞 글자만 대문자로 변환
// echo ucfirst($str_en), "\n";

//각 단어의 맨 앞 글자만 대문자로 변환
// echo ucwords($str_en);

// URL 관련 함수
$url = "https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&query=%EB%B0%B0%EB%8B%AC%EC%9D%98+%EB%AF%BC%EC%A1%B1&oquery=%EC%8D%B8%EB%A8%B8%ED%83%80%EC%9E%84&tqi=iun08dprvmsss6cRT%2FossssstVw-140825";

$arr_url = parse_url($url); //url를 분할해주는 함수
// var_dump($arr_url);

parse_str($arr_url["query"], $arr_parse); //query쪽의 내용을 쉽게 이용 가능
var_dump($arr_parse);

?>