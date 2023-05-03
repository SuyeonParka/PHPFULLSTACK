let arr = [1,2,3,4,5];


// push() 메소드 : 배열에 값 추가
arr.push(6);

// delete : 배열의 값 제거(인덱스(방)은 남아있음)
delete arr[5];

// splice() : 배열의 요소를 삭제 또는 교체(어디서 몇 개까지 자르실? 그리고 교체가능)
arr=[1,2,3,4,5];
arr.splice(2,1);   //삭제
arr.splice(2,0,8); //추가
arr.splice(2,1,8); //변경
arr.splice(2,1,3,5,6,7); //3번째 매개변수 부터는 가변파라미터(인자의 개수가 변하는 인자)로 모든 값을 추가
// 추가, 교체는 속도가 느리기 때문에 splice를 권장하지 않음

// indexOf() : 배열에서 특정 요소를 찾는데 사용
// let arr2 = [1,2,3,4,5];

// arr2 = [1,2,3,4,3,5,6,6,1];
// arr.lastIndexOf(6);

// // slice() : 
// let fileName = 'javaScript.log.php';
// // fileName = 'tt.aa.hh';
// const firstDot = fileName.indexOf('.');
// const lastDot = fileName.lastIndexOf('.');

// console.log(fileName.slice(0,firstDot));
// console.log(fileName.slice(firstDot+1, lastDot));
// console.log(fileName.slice(lastDot+1));

// concat() : 배열들의 값을 기준 배열에 합쳐서 새 배열을 반환
let arrCon1 = [1,2,3];
let arrCon2 = [10,20,30];
let arrCon4 = [100,200,300];
let arrCon3 = arrCon1.concat(arrCon2, arrCon4);
// console.log(arrCon3);

//includes() : 배열이 특정요소를 가지고 있는지 판별
let arrInc = [1,2,3,4];
// console.log(arrInc.includes(7));

// sort() : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrSort = [6,3,4,8,92,3,7,5,100,80,40];
// arrSort.sort(); //[100, 3, 3, 4, 40, 5, 6, 7, 8, 80, 92]

//오름차순
// arrSort.sort(
//     function(a, b) {
//         return a - b;
//     }
// );
// arrSort.sort((a,b) => a-b);

//내림차순
// arrSort.sort(
//     function(a, b) {
//         return b - a;
//     }
// );

arrSort.sort((a,b) => b-a);

//join() : 배열의 모든 오소를 연결해서 하나의 문자열을 만들어 줌요
const arrJoin = ["안","녕", "하","세", "요"];

//every : 배열의 '모든'요소들이 주어진 함수를 통과하는지 판별함
const arrEvery = [1,2,3,4,5];
// let result = arrEvery.every( function( val ) {
//                                 return val <= 4;
//                             });
// console.log(result);

//모든 요소의 2로 나눈 나머지가 0인지 판별해주세요.
let result1 = arrEvery.every( function(val) {
                                    return val % 2 === 0;
                                });
// console.log(result1);

let result2 = arrEvery.every( val => val % 2 === 0 );

//some() : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome = [1,2,3,4,5];
let result3 = arrSome.some( val => val >= 6 );
// console.log(result3);

//filter() : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1,2,3,4,5];
let result4 = arrFilter.filter( val => val >= 3);
console.log(result4);