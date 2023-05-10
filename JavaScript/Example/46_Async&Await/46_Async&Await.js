//todo : 자료구조

// 동기처리
// function delay() {
//     const delayTime = Date.now() + 2000;
//     while(Date.now() < delayTime) {}
//     console.log('B');
// }
// console.log('A');
// delay();
// console.log('C');


// 'B'출력 함수를 Promise로 변경하는 것
// function delay1() {
//     return new Promise(resolve => {
//         const delayTime = Date.now() + 2000;
//         while(Date.now() < delayTime) {}
//         resolve('B');
//     });
// }

// 비동기(처럼 보이게)
// function delay2() {
//     return new Promise(function(resolve) {
//         const delayTime = Date.now() + 2000;
//         while(Date.now() < delayTime) {}
//         resolve('B');
//     })
// }
// console.log('A');
// delay2().then(x => console.log(x));
// console.log('C');

//결과 : ACB (스택구조)
//? 스택구조 , first in last out 선입 후출


// async로 비동기 처리
// async function delay3() {
//     const delayTime = Date.now() + 2000;
//     while(Date.now() < delayTime) {}
//     return 'B';
// }
// console.log('A');
// delay3().then(x => console.log(x));
// console.log('C');

// 같은 결과 다른 방식 1)await는 async가 붙은 함수안에서만 사용 가능
function myDelay(ms) {
    return new Promise( resolve => setTimeout(resolve, ms) );
    // setTimeout(() => {}, ms);
}

async function getA() {
    await myDelay(1000);
    return 'A'; //promise에서 resolve('A')를 호출 해준거랑 같음
}

async function getB() {
    await myDelay(2000);
    return 'B';
}

// 출력하는데 3초 걸림 시간이 늘어나면 더 오래걸려서 비효율적
// promise 방식으로 출력
// getA()
// .then(strA => { 
//     return getB()
//         .then(strB => console.log(`${strA} : ${strB}`)) //체이닝
// });
// getA()
// .then(strA => console.log(strA));
// console.log(getA() + getB());


// 같은 결과 다른 방식 2)async를 이용할 경우(가독성 좋음)
async function getAll() {
    const strA = await getA();  // A호출(getA())한 거 (strA)에 담고 ,'getA 처리가 완료될 때까지 기다리겠다', a 1초 기다려서 담고
    const strB = await getB();  // B호출한 거 담고, strA에는 A가 담기고, strB에는 B가 담김 그리고 호출, b 2초 기다려서 담고 총 3초 걸림

    console.log(`${strA} : ${strB}`);   //호출
}

// getAll(); return 할 경우 결과 호출

//? setTimout은 브라우저에 던져지는 거 

// 병렬처리 방법
async function getAll2() {
    Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : '))); //all로 받아오고 join으로 연결
}

// getAll2();

// 실제 사용 시에는 안에 return을 주고 then을 이용해서 출력함
async function getAll4() {
    return Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : ')));
}
getAll4()
.then(strAll => console.log(strAll))
.catch('error');


// 에러 처리 경우
async function getAll3() {
    throw new Error('err'); // 에러 주고
    Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : '))); //all로 받아오고 join으로 연결
}

getAll3()
.catch(console.log('error'));   //catch로 에러 줌