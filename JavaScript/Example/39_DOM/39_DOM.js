//1. '요소'를 선택하는 방법
//1-1. ID로 선택하는 방법
const title = document.getElementById('title');
title.style.color = 'blue';

//1-2. 태그명으로 선택
const li = document.getElementsByTagName('li');
li[1].style.color = 'yellow';
li[2].style.color = 'red';

//탕, 볶, 깐은 배경색상을 오렌지
//짜,짬,라는 배경 베이지색

for(let i=0; i<li.length; i++) {
    if(i % 2 === 0) {
        li[i].style.backgroundColor = 'orange';
    } 
    else {
        li[i].style.backgroundColor= 'beige';
    }
}

//1-3. 클래스명으로 선택
const noneli = document.getElementsByClassName('none-li');

//1-4. css 선택자로 선택
// querySelector() : 복수의 요소가 있다면 가장 첫번째 것만 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none-li');

// querySelectorAll() : 복수 요소 전부 선택
const li3 = document.querySelectorAll('.none-li');

//2. 요소 조작하기

// 2-1. 콘텐츠를 조작하는 방법
// textContent : 순수 텍스트 데이터 전달, 이전태그들 모두 제거
title.textContent = '<span>바꿈</span>';

// innerHTML : 태그는 태그로 인식해서 전달, 이전태그들 모두 제거
title.innerHTML = '<span>바꿈요</span>';

const div1 = document.querySelector('#div1');

// 요소의 속성 추가
const it = document.getElementById('it');
it.setAttribute('placeholder', '셋어트리뷰트로 삽입');

const aa = document.getElementById('aa');
aa.setAttribute('href', 'http://www.naver.com');

// 요소의 속성 제거
it.removeAttribute('placeholder');
// aa.removeAttribute('href');


// 요소의 스타일링(사용 잘 안함)
// style.으로 하면 인라인형식으로 삽입
// aa.style.textDecoration = 'none';

// 클래스로 스타일링
aa.classList.add('aa1','aa2','aa3');

// 새로운 요소 만들기
// 요소 만들기
const cli = document.createElement('li');
cli.innerHTML = '마라탕';

// 요소 자식요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(cli);


// 요소를 특정 위치에 삽입하는 방법
// const zzam = document.getElementsByClassName('none-li');
const zzam = li[2];
ul[0].insertBefore( cli, zzam );


// 해당 요소 지우기
// cli.remove();

// 라조기와 유산슬 사이에 "잡채밥", "동파육"을 순서대로 넣고
// 배경색 수정

const zong= document.createElement('li');
zong.innerHTML = '잡채밥';

const dong= document.createElement('li');
dong.innerHTML = '동파육';

const jap = li[6];
ul[0].insertBefore( zong, jap);

const yuk = li[7];
ul[0].insertBefore( dong, yuk );

for(let i=0; i<li.length; i++) {
    if(i % 2 === 0) {
        li[i].style.backgroundColor = 'orange';
    } 
    else {
        li[i].style.backgroundColor= 'beige';
    }
}









// 예시) 마우스 올렸을 때 나타나기 / 뗐을 때 없어지기
// it.addEventListener('mouseenter', function() {
//     it.setAttribute('placeholder', '셋어트리뷰트로 삽입')
// });
// it.addEventListener('mouseleave', function() {
//     it.removeAttribute('placeholder');
// });