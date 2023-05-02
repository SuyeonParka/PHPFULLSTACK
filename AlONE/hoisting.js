//호이스팅 예제

function catName(name) {
    console.log("제 고양이의 이름은 " + name + "입니다");
}

catName("호랑이");

/*
결과: "제 고양이의 이름은 호랑이입니다"
  */

catName("클로이");

function catName(name) {
    console.log("제 고양이의 이름은 " + name + "입니다");
}

/*
결과: "제 고양이의 이름은 클로이입니다"
*/

// var 변수 선언과 함수선언문에서만 호이스팅이 일어남
// var 변수/함수의 선언만 위로 끌어 올려지며, 할당을 끌어 올려지지 않음
// let/const 변수 선언과 함수표현식에서는 호이스팅이 발생하지 않는다.