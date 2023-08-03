<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//jwt로 할 때는 로그인이라고 하지 않음
//jwt = 토큰
//json 가볍다, 가독성이 좋음
//토큰은 인증 절차를 위한 것임
//토큰은 json형태를 암호화해서 이상한 문자열 형식으로 전송함
//암호화된 제이슨형식의 토큰 = jwt
//세영역으로 나뉨(jwt사이트 참고)
//헤더 부분에는 토큰의 정보, 페이로드 부분은 실제 사용하는 정보(ex유저 아이디, 발급시간, 유효기간, 유효시간 등), 사인 부분은 이 토큰은 우리가 발급한건지 아닌지 확인하기 위한 영역 비밀키를 이용
//jwt는 갈취당하기 쉬워 민감한 정도는 넣지않음
//단방향 암호화 - 한 번 잠구면 풀수 없음, 복구화가 안됨
//양방향 암호화
//시그니처의 토큰을 비교해서 우리가 발급한 건지 아닌지 확인하는 것 - jwt
//처음 발급할 때만 유저정보를 가져옴 굳이 웹 서버나 디비 데이터 사용을 안해도됨 리소스 사용 안해서 부담이 줄어듦
//모바일 앱 같은 경우는 세션유지가 어려워서 일반적으로 세션으로 유저인증이 불가능함 그래서 어쩔 수 없이 토큰이용하거나 오오스로 인증함
//세션 기반 인증과 토큰 기반 인증 차이 알기
Route::get('/token', [AuthController::class, 'issueToken']);
Route::get('/chk', [AuthController::class, 'chk']);

