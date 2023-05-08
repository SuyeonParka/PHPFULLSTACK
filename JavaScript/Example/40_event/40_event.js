// 인라인 이벤트 등록
// html파일 참조
// onclick


// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function() {
    location = "http://www.google.com";
}

// addEventListener(eventType, function) 방식
const btn2 = document.querySelector('#btn2');
// const btn2 = document.getElementById('btn2');

// 현재 창에서 열기
// btn2.addEventListener('click', () => {
//     location.href = 'http://www.daum.net';
// });

// 팝업 창 열기
let newWindow = null;
btn2.addEventListener('click', () => {
    newWindow = open('http://www.daum.net', '', 'width=500 height=500');
});

// 팝업 창 닫기
const btn3 = document.getElementById('btn3');
btn3.addEventListener('click', () => {
    newWindow.close();
});
// btn3.addEventListener('click', popUpClose(newWindow));


// 이벤트 삭제
// removeEventListner(eventType, function)
// addEventListner()로 등록한 이벤트의 인자와 같은 인자를 셋팅해야 삭제됨
// btn3.addEventListener('click', popUpClose(newWindow));

// btn3.removeEventListener('click', popUpClose(newWindow));

// function popUpClose(win) {
//     win.close();
// }

//이벤트 타입

//1. 마우스 이벤트
//mousedown - 마우스 가 요소안에서 클릭이 눌릴 때
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown', () => alert('div1 클릭'));

//mouseenter - 진입
div1.addEventListener('mouseenter', () => alert('div1 진입'));

