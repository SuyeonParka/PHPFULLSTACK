/*

promise : 어떠한 값을 미래에 반환하는 js의 오브젝트
        : 비동기 작업이 ( 성공 혹은 실패로 ) 끝났을 때, 그 다음 수행 내용을
            처리할 수 있게 하는 도구
        : 콜백함수 문제 보안
사용하는 가장 큰 이유 : 비동기 작업의 흐름을 쉽게 제어가능
*/

const task1 = () => {
    console.log('Task 1 is started.')
    return new Promise((resolve, reject)=> {
        setTimeout(() => {
            console.log('Task 1 is done.');
            resolve(1);
        }, 2000);
    })
};

const task2 = () => {
    console.log('Task 2 is started.')
    return new Promise((resolve, reject)=> {
        setTimeout(() => {
            console.log('Task 2 is done.');
            resolve(2);
        }, 500);
    })
};

const task3 = () => {
    console.log('Task 3 is started.')
    return new Promise((resolve, reject)=> {
        setTimeout(() => {
            console.log('Task 3 is done.');
            resolve(3);
        }, 1000);
    })
};

// task1()
// .then(() => task2())
// .then(() => task3())
// .then(() => console.log('Completed'))
// .catch(console.log)
// .finally(() => console.log('Done'));

Promise.all([task1(), task2(), task3()])
.then((res) => console.log(res))
.catch(console.log)
.finally(() => console.log('Done.'));
