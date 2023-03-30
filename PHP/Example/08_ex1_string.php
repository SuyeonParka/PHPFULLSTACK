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

// $arr_url = parse_url($url); //url를 분할해주는 함수
// var_dump($arr_url);

// parse_str($arr_url["query"], $arr_parse); //query쪽의 내용을 쉽게 이용 가능
// var_dump($arr_parse);

//역순의 문자열
// $str_abcd = "abcd";
// echo strrev($str_abcd);

//문자열 나누기
//알파벳 사용하지 않는 언어는 컴에서 2~4바이트로 봄(mb_substr사용)
//음수도 가능(반대로 자름)
$str_1 = "가나다라마바";
// echo substr($str_1, 3, 2); //3번째 다음으로 2글자 추출
// echo mb_substr($str_1, -3, 2);

//"PHP입니다."만 출력
// $str_tng = "안녕하세요. PHP입니다.";
// echo mb_substr($str_tng, -7), "\n";
// echo mb_substr($str_tng, 7), "\n";

//"세요. P" 
// echo mb_substr($str_tng, 3, 5), "\n";
// echo mb_substr($str_tng, 1, -4), "\n";
// echo mb_substr($str_tng, 10, 3), "\n";
// echo mb_substr($str_tng, -1, 3), "\n";

//문자열 빈공간 지우기
$str_trim = "            abcd        \n";
// echo  trim($str_trim);
// echo  trim($str_trim);
// echo  rtrim($str_trim), "\n";
// echo  ltrim($str_trim);
// echo "aaa";


//문자열의 길이
$str_len = "가나다라";

// echo strlen($str_len), "\n";
// echo mb_strlen($str_len);

//문자열 포맷에 따라 출력하는 함수
//순서대로
// define("WELCOME", "안녕하세요. %s님."); //에러메시지 보낼때 자주사용되는 방식
// printf(WELCOME, "홍길동");
// printf("안녕하세요. %s입니다. %d %c", "PHP", 1234, "안녕");

// 기본 포맷 : ERROR(숫자) : ERROR가 발생했습니다.
// 에러 번호 : 에러종류
    //1 : 시스템
    //2 : 로그인
    //3 : 접속
// define("ERROR_MSG","ERROR(%d) : %s ERROR가 발생했습니다.\n");
// printf(ERROR_MSG, 1, "시스템");
// printf(ERROR_MSG, 2, "로그인");
// printf(ERROR_MSG, 3, "접속");

//문자열을 분리하는 함수
// $str_sscanf = "가나다라 50 abcd";
// sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
// echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";

//문자열을 반복해서 찍어주는 함수
// echo str_repeat("가나", 3);

//문자열을 특정 문자열로 분리하는 함수 : explode()
$str_expl = "홍길동,27세,남자,의적,조선";
$arr_expl = explode(",",$str_expl);
// print_r($arr_expl);

//배열을 특정 문자열로 결합하는 함수 :implode()
$str_impl = implode("a",$arr_expl);
echo $str_impl;
?>