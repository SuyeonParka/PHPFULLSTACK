function clock() {
    let timeTime = document.querySelector('h1');
    let today = new Date();
    let hour = today.getHours();
    let minutes = today.getMinutes();
    let seconds = today.getSeconds();

    if(hour > 12) {
        strAmpm = "오후"
    }
    else {
        strAmpm = "오전";
    }

    timeTime.innerHTML = "현재 시간 " + strAmpm + hour + ":" + minutes + ":" + seconds;
}

clock();
const setInt = setInterval(clock,1000);

const myButton = document.querySelector('button');

myButton.addEventListener('click', () => {
    clearInterval(setInt);
});
