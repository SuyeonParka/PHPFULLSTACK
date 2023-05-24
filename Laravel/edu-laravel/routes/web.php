<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get방식, '/'=경로
//function~ : closer
//'welcome'이라는 view를 표시할 것이다


//-----------------------
// 라우트 정의
//-----------------------
// 문자열 리턴
Route::get('/hi', function() {
    return '안녕하세요';
});

// 뷰 리턴(뷰 파일이 없으면 에러발생, 디버그모드 설정이 false면 500에러, true면 에러의 상세정보 출력)
// 발표할때 디버그 설정 false로 해놓기
Route::get('/myview', function() {
    return view('myview');
});

//------------------------
// HTTP 메소드 대응하는 라우터
//------------------------

Route::get('/home', function() {
    return view('home');
});

// GET 요청에 대한 처리
Route::get('/method', function() {
    return 'GET Method!!';
});

// post 요청에 대한 처리
Route::post('/method', function() {
    return 'POST Method!!';
});

// put 요청에 대한 처리(기존 업데이트)
Route::put('/method', function() {
    return 'PUT Method!!';
});

// delete 요청에 대한 처리
Route::delete('/method', function() {
    return 'Delete Method!!';
});

//mvc에서는 application에서 하던 거

// 모든 요청에 대한 처리 (any 잘 안씀)
//?? function이 close??
//** router에 정의된 순서에 따라서 실행결과가 바뀜 
//** 그래서 any를 젤 위로 올리면 post누르면 post~, put누르면 put~이 나옴*/
//! 가장 밑에 있는 것부터 실행됨 
Route::any('/method', function() {      
    return 'ANY Method';
});

// 특정 여러 메소드 요청에 대한 처리
// 처음 처리하고 싶은 배열이 들어감
// 우리가 배열에서 적어준 특정 메소드 ('get', 'post')의 처리
Route::match(['get','post'],'/method', function() {
    return 'MATCH Method!!';
});

//---------------------
// 라우트에서 파라미터 제어
// 파라미터를 리퀘스트하는 (보내는) 방식 2가지
//---------------------
// 1. 쿼리 스트링으로 파라미터 획득
// query뒤에 ? 뒤에 붙음(주소창 보면)
// 쿼리 스트링으로 오는 건 그냥 쓸 수가 없어서 리퀘스트 파라미터 줘야함
// $request 타입을 Request(클래스 객체) 로 하겠다는 의미 
// Request의 역할 : 타입 힌트
// Request는 class라서 어디있는지 지정을 해줘야함
// 주소창에 id=값 name=값 넣어주면 출력됨
Route::get('/query', function(Request $request) {
    return $request->id.", ".$request->name;
});

// 2. URL 세그먼트로 지정한 파라미터 획득
// query뒤에 서브디렉토리처럼 /사용
// {}안에 해당하는 key적음
// /segment/{id}는 segment/1 이런식으로 url들어옴.(/segment/{id} 이 url로 접속하겠다는 뜻) 뒤에오는 1을 받아서 사용하겠음(세그먼트 파라미터를 획득하겠다!는 뜻)
// closer안에는 세그먼트안에 준 key와 name을 같게 적어줌
// 세그먼트 파라미터도 있으면 파라미터를 쓰고 없으면 안씀??
Route::get('/segment/{id}', function($id) {
    return 'segment ID : '.$id;
});

// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
// 처음에 base로 뜨는데 뒤에 다른걸로 설정해주면 바뀜
// segment사용될 때는 웬만하면 API
// 페이징할때 사용(api로 통신)
Route::get('/segment2/{id?}', function($id = 'base') {
    return 'segment2 ID : '.$id;
});

// request객체로도 세그먼트 파라미터를 획득 가능
// 세그먼트 파라미터가 없어도 404에러 발생 안함
// {id?}는 key
//?? 여기 key에 ? 왜 붙이는지 -> ?는 있으면 받고 없으면 안받는 거라서 ?빼면 오류남
Route::get('/segment2/{id?}', function(Request $request) {
    return 'segment2 ID : '.$request->id;
});

//-----------------------
// 라우트의 이름지정
//-----------------------
Route::get('/names/home', function() {
    return view('nameshome');
});

// 가장 추천하는 방식
Route::get('/names', function() {
    return 'name.index !!!';
})->name('names.index'); //이 라우트의 이름은 name이다
//href의 url을 수정하지 않아도 name을 통해서 수정 가능해서 가장 추천함
//name을 지정하는 이유 : 라우터에 이름을 지정하여 경로(url) 또는 리다이렉션을 
// 생성할 때 해당 라우터 이름을 사용하기 위함임

//---------------------
// 라우트 매칭 실패시 대체 라우트 정의
// 가장 마지막에 정의 : 보통 에러 처리를 마지막에 정의
//---------------------
Route::fallback(function() {
    return '잘못된 경로로 접속하셨습니다.';
});

//브라우저에 작성하는 거는 web.php에 쭉 작성하면 됨


//-------------------------
// 라우트의 그룹화 및 공통경로 설정
//-------------------------
// 공통 경로
// 라우트를 그룹으로 묶는다 
// 우리가 일일이 설정해 주지 않아도 앞에 공통경로가 생성됨
// prefix말고 그냥 그룹으로만 묶고 싶다면 앞에 prefix를 지워주면 됨
// prefix('user')들어가서 name에 앞에 users 적어줌
Route::prefix('users')->group(function() {
    Route::get('/login', function() {
        return 'Login!!';
        })->name('userslogin');

    Route::get('/logout', function() {
        return 'Logout!!';
        })->name('users.logout');

    Route::get('/registration', function() {
        return 'Registration!!';
        })->name('users.registration');
});

// 미들웨어 사용
// 에러남 = 미들웨어가 작동이 잘 됨
// 우리가 해당 라우트를 실행하기 전이나 후에 체크를 해주는 아이
// 공통적인 라우트 처리를 해줘야 할 때 이렇게 공통적으로 묶어서 처리해줌
// 'auth'(정해져있음):로그인이 안돼있는 상태면 아얘 못들어가게
Route::middleware('auth')->prefix('users')->group(function() {
    Route::get('/login', function() {
        return 'Login!!';
    })->name('userslogin');

    Route::get('/logout', function() {
        return 'Logout!!';
    })->name('users.logout');

    Route::get('/registration', function() {
        return 'Registration!!';
    })->name('users.registration');
});


//-----------------------
// 서명 라우터
//-----------------------
use Illuminate\Support\Facades\URL;

Route::get('/makesign', function() {
    // 일반 URL 링크 생성하기
    // route() : view에서 썼던 url 생성하던 그 아이
    // $baseUrl = route('invitations', ['invitation' => 5816, 'group' => 678]);
    // 일반적인 링크 생성
    $baseUrl = route('sign');
    // 서명된 URL 링크 생성하기(url객체를 사용해야함)
    // $signUrl = URL::signedRoute('invitations', ['invitation' => 5816, 'group' => 678]);
    // 서명이 된 URL링크는 한번 생성하면 계속 있음(유효기간이 없음, 보통 잘 사용안함)
    $signUrl = URL::signedRoute('sign');

    // 유효기간이 있는 서명된 URL 링크 생성하기(사용 많이 함)
    // 우리가 이동하게 될 name('sign') 뒤에는 시간(주어진 시간이 지나면 접속 에러뜸)
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10));
    
    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});

// url에 접속할 권한을 준다
///Route::get('/invitations/{invitation}/{group}', function() {
Route::get('/sign', function() {
    return "Sign!!";    //문자열을 생성하는 아이
    //서명이 제대로 돼있는지 확인하는 middleware를 signed이라는 ~에게 줬다.
    //?? 지정한 값과 일치해야 접속가능
    // 미들웨어 : 우리가 어떠한 라우터에 실행되기 전이나 후에 넣어서 특정 기능을 하기 위함
    // 보통은 인증절차나 값을 체크 유무에 사용
    // 라우터에 미들웨어를 사용하게 되면 라우터를 실행했을때 미들웨어 발동
    // 여기서는 유저가 접속했을 때 서명이 있는지 확인 
    // 'signed'는 정해져있음 
    // 여러개의 미들웨어 사용시에는 ->으로 체이닝
})->name('sign')->middleware('signed');

//-------------------------------
// 컨트롤러
//-------------------------------
// 커맨드로 컨트롤러 생성 php artisan make:controller TestController
// 라우터를 캐시화?
// 캐시화 : 필요할 것 같은 거를 미리 메모리에 올림, 속도 빨라짐
// 클로저 사용보다 튜플방식으로 만드는게 더 나음
// index라는 메소드를 만듦
// 컨트롤러 호출 방법(컨트롤러 쓸 때 항상 use 써줘야함)
// TestController파일의 namespace
use App\Http\Controllers\TestController;
Route::get('/test', [TestController::class, 'index'])->name('tests.index');


// 커멘드로 컨트롤러 생성
// php artisan make:controller TasksController --resource
use App\Http\Controllers\TasksController;
route::resource('/tasks', TasksController::class);


use App\Http\Controllers\BladeController;
route::get('blade', [BladeController::class, 'index'])->name('blade.index');
