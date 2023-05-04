
const NOW = new Date('2023-04-30 15:20:30.123');

//getFullYear() : 연도만 가져옴
console.log( "년도 : " + NOW.getFullYear() );

//getMonth() : 월을 가져옴
console.log( "월 : " + ( NOW.getMonth() + 1 ) );

//getDate() : 날을 가져옴
console.log( "일 : " + NOW.getDate() );

//getDay() : 요일 가져옴
console.log( "요일 : " + NOW.getDay() );

//getTime() : 1970/01/01 기준으로 몇'초'가 지났는지(밀리초 반환)
console.log( "시간(Linux) : " + NOW.getTime() );

//getHours() : 시간 가져옴
console.log( "시간 : " + NOW.getHours() );

//getMinutes() : 분 가져옴
console.log( "분 : " + NOW.getMinutes() );

//getSeconds() : 초 가져옴
console.log( "초 : " + NOW.getSeconds() );

//getMilliseconds() : 밀리초 가져옴
console.log( "밀리초 : " + NOW.getMilliseconds() );


// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘부터 며칠이 경과됐는지 출력해주세요.

const DAY = new Date("2022-09-30 19:20:10");
const today = new Date();
const MM = today.getTime() - DAY.getTime();
const DD = Math.ceil(MM / (1000*60*60*24)); //밀리초 사용해서(1s=1000ms, 1분(60초) * 1시간(60분) * 하루24시간)
console.log(DD + "일 경과");
//1초만 지나도 하루가 바뀌는 경우가 있기 때문에 round보다는 ceil사용





