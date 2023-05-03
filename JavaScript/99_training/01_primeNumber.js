let num = 100;
let arr = [];

// 1. 1~입력값의 요소를 가지는 배열을 만들어주세요.
// 2. 그 배열에서 소수만 찾아서 새로운 배열을 만들어주세요.
// 3. 그 배열을 alert로 출력해주세요.
// 4. filter() 필수사용


for(let i = 1; i <= num; i++) {
    arr.push(i);
}

let result = arr.filter(
    function(val) {
        if (val < 2) {
            return false;
        }
        for (let i = 2; i < val; i++) {
            if (val % i === 0) {
                return false;
            }
        }
        return true;
    }
);

console.log(result);