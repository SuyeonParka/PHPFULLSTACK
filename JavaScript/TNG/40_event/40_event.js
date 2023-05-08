// 1. 버튼을 클릭시 아래 내용의 알러트가 나옴
//  "안녕하세요. 숨어있는 div를 찾아보세요"

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옴. 
// 들킨 상태에서는 알러트가 안나옴
// "두근두근"

// 3. 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타남
// "들켰다."

// 4. 3번의 상태에서 다시 한번 더 클릭하면 
// 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안보임
// 다시 숨는다.

const btn1 = document.querySelector('#btn1');
btn1.addEventListener('mousedown', () => alert('안녕하세요.\n숨어있는 div를 찾아보세요.'));

const div1 = document.querySelector('.div1');
div1.addEventListener('mouseenter', function() {
    if(div1.style.backgroundColor !== beige){
        alert('두근두근');
    }
});


function test() {
    if (div1.style.backgroundColor==='beige') {
        div1.style.backgroundColor = 'white';
        alert('다시 숨는다.');
    }
    else {
        div1.style.backgroundColor = 'beige';
        alert('들켰다.');
    }
}

const str1 = Math.round(Math.random()*1000);
const str2 = Math.round(Math.random()*1000);

document.getElementById('div1').style.top = str1;
document.getElementById('div1').style.top = str2;

// div1.addEventListener('mousedown', () => alert('다시 숨는다.'));
// onclick 사용 시 addEventListener 와 실행이 겹쳐서 하나만 사용


