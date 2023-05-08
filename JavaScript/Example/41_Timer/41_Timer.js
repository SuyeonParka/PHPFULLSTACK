// 타이머 함수

// setTimeout() / clearTimeout()
const timeOut = setTimeout(() => console.log('A'), 2000);

clearTimeout(timeOut); //2초가 지나기전에 삭제

// setInterval() / clearInterval()
// const myInterval = setInterval(() => console.log('A'), 1000);

// clearInterval(myInterval);

// 1~5를 1초마다 콘솔에 출력

// for (var i = 1; i < 6; i += 1) 
// {
//     (function (a) 
//     {
//     setTimeout(function () 
//     {
//         console.log(a)
//     }, i * 1000)
//     })(i);
// }

// const myTimeout = setTimeout(() => console.log(1), add, 5, 1000);


let up = 1;

const myTimer = setInterval(() => {
    console.log(up);
    if(up++ === 5) clearInterval(myTimer);
},1000);

let i = 1;
const interval = setInterval(() => console.log(i++), 1000);
setInterval(() => clearInterval(interval), 5000);