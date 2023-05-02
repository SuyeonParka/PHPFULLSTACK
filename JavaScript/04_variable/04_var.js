console.log("안녕하세요. js파일입니다.", "두번째");
// -----------------------------------
//  변수
// ------------------------------------
// var(과거 사용법) : 중복 선언 가능, 재할당 가능(ex.uName = "김행숙";), 함수레벨 스코프
// var uName = "홍길동";
// var uName = "박지원";
// uName = "김행숙";
// console.log( uName );

// // let(요즘 사용법) : 중복 선언 불가능, 재할당 가능(ex.uAge = 30;), 블록레벨 스코프
// let uAge = 20;
// uAge = 30;

// // 상수 : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "여자";
// gender = "남자";

//----------------------------------------------------------
// 스코프
// 함수 내에서 변수에 대한 접근이 어떻게 되는지를 나타내는 용어
// 변수에 접근할 수 있는 범위
//----------------------------------------------------------


// 전역 스코프(어디서든지 사용할 수 있음)
// 주의사항 : 되도록이면 사용하지 않는 방향으로. 에러를 줄이기 위해
let lName = "김김김";


// 함수레벨 스코프
// 새로운 함수가 생성될때마다 새로운 스코프가 발생함
function test() {
    console.log(lName);
    let lAge = 30;
    console.log(lAge);
}

//블록({'중괄호'를 말함)레벨 스코프
//말 그대로 블록{}이 생성될 때마다 새로운 스코프가 형성되는 것
function test1() {
    if(true) {
        let vTest1 = "함수 : 테스트1";
        var vVar1 = "var로 선언";
    }
    // console.log(v_test1);
    console.log(vVar1);
}
// let을 최상단에 두면 값이 출력됨
function test1() {
    let vTest1 = "함수 : 테스트1";
    if(true) {
        var vVar1 = "var로 선언";
    }
    // console.log(v_test1);
    console.log(vVar1);
}

//------------------
// 호이스팅 (hoisting)
//------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올리는 것
// console.log( hTest() );
// console.log( "51 line : " + varTest );
// console.log( "67 line : " + letTest );
console.log( "68 line : " + constTest);


function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";
console.log( "58 line : " + varTest );

let letTest = "let 변수";
const constTest = "const 상수";