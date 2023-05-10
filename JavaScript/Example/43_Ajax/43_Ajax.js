// 장점 : 웹페이지 전체 로딩안하고 일부분만 가능

/*
HTTP


AJAX
Fetch Api 방식

JSON
형식으로 주고받음
형태-문자열로 넘어옴
"{
    key1 : 'aa'
    ,key2 : 1
}"
간단함
가벼움
가독성
key와 value가 짝은 이룸
직렬화하기 위해 사용(처음엔 배열형식으로 코드를 짜는데 JSON을 JSON포맷으로 변경하는 것)
프로그래밍 언어나 플랫폼에 상관없이 사용 가능

JSON.stringify( obj ) : string으로 변환(직렬화)
JSON.parse( json ) : object로 변환(반직렬화)

사이트 
https://picsum.photos
*/

// const url = "https://picsum.photos/v2/list?page=1&limit=5";

let mybutton = document.querySelector('button');

mybutton.addEventListener('click', function() {
    let ipt = document.getElementById('myinput').value;
    fetch(ipt)
    .then(res => {return res.json()})   //response 약자
    .then(data => makeList(data))
    .catch(console.log);
});

function makeList(data) {
    const div = document.getElementById('mydiv');
    // div.replaceChildren();  //부모노드에서 사용
    div.innerHTML = '';
    data.forEach(item => {
        console.log(item);
        const myImg = document.createElement('img');
        myImg.setAttribute('src', item.download_url); //download_url=key값
        div.appendChild(myImg); //body에서 변경
    });
}

//* replaceChildren 대신에 div.innerHTML = ''; 사용 가능

// function toggleImg() {
//     data.forEach(item => {
//         console.log(item);
//         const myImg = document.createElement('img');
//         myImg.setAttribute('src', item.download_url);
//         document.body.appendChild(myImg);
//     });
// }
