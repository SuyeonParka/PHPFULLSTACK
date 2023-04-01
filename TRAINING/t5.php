<?php
/*<함수>
사용이유 : 재사용성 증가, 가독성 증가

function clean_class_room(바뀌는 값만 파라미터로)
{

}
clean_class_room(값)으로 출력

function clean_class_room($param_name, $param_loc)
{
    $result_str = $param_name."씨, ".$param_loc."을/를 청소해주세요.\n";
    echo $result_str;
}
*/

/*-------------------------------------------------------
    함수명 : clean_class_room
    기능 : 이름과 구역을 받아 청소지정 문자열을 반환
    파라미터 : $param_name  string
                $param_loc string
    리턴 : $return_str string(리턴값없으면 없음이라고 적음)
---------------------------------------------------------*/
function clean_class_room($param_name, $param_loc)
{
    $result_str = $param_name."씨, ".$param_loc."을/를 청소해주세요.\n";
    return $result_str;
}

$result = clean_class_room("mm", "책상");
echo $result;

/*-------------------------------------------------------
    함수명 : my_sum_all
    기능 : 1부터 파라미터의 지정 숫자까지의 합을 구해서 리턴
    파라미터 : $param_int  int        
    리턴 : $return_int int(리턴값없으면 없음이라고 적음)
---------------------------------------------------------*/
function my_sum_all($param_int)
{   
    $sum = 0; //연산할 결과를 저장할 변수
    for ($i=1; $i <= $param_int; $i++) 
    { 
        $sum += $i;
    }
    return $sum;
}

$result = my_sum_all(6);
echo $result;
// echo my_sum_all(5);

?>