<?php

// cookie 작성
setcookie("name", "Kim Mihyeon", time() + 30);
setcookie("age", "26", time() + 300);   //300sec


// cookie 삭제 방법
setcookie("age", "", 0);    // age 출력안됨

// 자동로그인 이용 시 쿠키 사용 (보안상 문제는 있음, id와 pw를 저장하진 않음)