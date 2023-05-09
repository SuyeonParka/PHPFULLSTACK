// setTimeout(function() {
//     console.log('A');
// },3000);

// setTimeout(function() {
//     console.log('B');
// },2000);

// setTimeout(function() {
//     console.log('C');
// },1000);

// 콜백함수를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.
console.log('A');
setTimeout(() => {
    console.log('C')
},1000);
console.log('B');

// setTimeout(() => {
//         console.log('A');
//         setTimeout(() => {
//             console.log('B');
//             setTimeout(() => {
//                 console.log('C');
//             }, 1000);
//         }, 2000);    
//     }, 3000);



// promise를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.
let test = function() {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve();
            console.log("A");
        }, 1000);
    });
}

let test2 = function() {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve();
            console.log("B");
        }, 1000);
    });
}

let test3 = function() {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve();
            console.log("C");
        }, 1000);
    });
}

test()  // 얘가 맞으면
.then(() => test2())    // 얘 실행
.then(() => test3())    // 그 담 성공하면 얘 실행
