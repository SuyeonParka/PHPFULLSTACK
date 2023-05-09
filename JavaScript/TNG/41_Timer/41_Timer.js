function clock() {
    let timeTime = document.querySelector('h1');
    let today = new Date();
    let hour = String(today.getHours()).padStart(2,'0');
    let minutes = String(today.getMinutes()).padStart(2,'0');
    let seconds = String(today.getSeconds()).padStart(2,'0');

    if(hour > 12) {
        strAmpm = "오후"
    }
    else {
        strAmpm = "오전";
    }

    timeTime.innerHTML = "현재 시간 " + strAmpm + hour + ":" + minutes + ":" + seconds;
}

clock();
let setInt = setInterval(clock,1000);   // 멈춤->재시작하고 다시 멈출때 작동이 안돼서 let으로 선언

const myButton = document.querySelector('button');


myButton.addEventListener('click', () => {
    clearInterval(setInt);
    // setInt = clock();
});

const restartBnt = document.getElementsByClassName('restart');

restartBnt[0].addEventListener('click', () => {
    setInt = setInterval(clock, 1000);
})


// let toggle = true;

// document.onclick = function() {
//     if(toggle){
//         clearInterval(setInt);
//         toggle=false;
//     }
//     else {
//         setInt = setInterval(clock, 1000);
//         toggle=true;
//     }
// }
