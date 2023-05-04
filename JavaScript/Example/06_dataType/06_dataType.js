//--------------------------
//기본 데이터 타입
//--------------------------

// 숫자 (number)
let num = 1;    // 전역 스코프
function test() {
    let num = 2;    //함수 스코프
    console.log("함수 : " + num);
}
console.log("전역 : " + num);   //스코프가 달라서 선언이 됨


// 문자열 (string)
let str = "안녕";

// 불리언 (boolean)
let bool = true;

// null
let test1 = null;

// undefined
let test2;

// Symbol(class라서 앞글자 대문자 사용)
// 유일한 값을 가짐(아래 두개를 비교하면 false(같지 않다)고 나옴)
const sConst1 = Symbol("심볼입니다.");
const sConst2 = Symbol("심볼입니다.");

//----------------------------------------------
// 객제 타입( JSON ),{중괄호 사용}
// 기본 타입들을 제외한 모든 타입이 속함
//----------------------------------------------
let obj1 = {
    uName : "길동아 그만나와라"
    ,uAge : 30
    ,uGender : "여자"
    ,test : function () { 
        console.log("객체 함수 test");
    }
    ,addr : {
        addr1 : "대구"
        ,addr2 : "붓싼"
    }
}


//배열 (Array) : object하나로 퉁치고 있삼
let arr = [ "탕수육", "핏짜", "개밥" ];


