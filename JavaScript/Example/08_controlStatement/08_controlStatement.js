//제어문


//---------------------------------------
// 조건문 ( if, switch )
// if( 1 > 0 ) {
//     console.log( "1은 0보다 크다." );
// } else if ( 1 < 0 ){
//     console.log( "1은 0보다 작다." );
// } else {
//     console.log( "기타 등등" );
// }

// let uAge = 30;
// switch ( uAge ) {
//     case 20:
//         console.log( "20살" );
//         break;

//     default:
//         console.log( uAge + "살");
//         break;
// }
//---------------------------------------


//-------------------------------------------
// 반복문( while, do while, for, foreach, for...in, for...of )
//-------------------------------------------

// let num = 0;
// while( num <= 3 ) {
//     console.log(num);
//     num++;
// }

// let num1 = 1;
// do {
//     console.log( "2 * " + num1 + " = " + num1 * 2)
//     num1++;
// } while ( num1 <= 9 );

// let dan = 2;
// let multi = 1;
// do {
//     console.log( dan + "*" + multi + " = " + (dan * multi));
//     multi++;
// } while ( multi <= 9 );

// dan = 2;
// for( let i = 1; i <= 9; i++) {
//     console.log( dan + "*" + i + " = " + (dan * i));
// }

// foreach : 배열만 루프 가능
let arr = [1, 2, 3, 4];

// arr.forEach( function( val ){
//     console.log( val );
// });

arr = {
    uName : "동길홍"
    ,uAge : 15
}

//for...in : 모든 객체 루프 가능(키가 들어오고 i를 저장. i를 통해서 값을 저장)
// for( let i in arr ) {
//     console.log( i + " : " + arr[i] );  //key값도 나오는 법
// }


arr = [5,4,3,2];
arr.num = 1;
//for...of :
for( let i of arr ) {
    console.log( i );  //key값도 나오는 법
}
