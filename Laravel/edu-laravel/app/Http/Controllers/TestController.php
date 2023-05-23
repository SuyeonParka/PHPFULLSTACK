<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // index메서드 만듦
    function index() {
        // return 'Tests.index!!!';
        // view('불러올 blade파일명')
        // with('key', '실질적인 값') - 우리가 보내주고자 하는 값 - blade파일에 key 연결 : {{$name}}
        // with파일과 함께 view파일을 호출한다는 뜻
        return view('test')->with('name', '미스터 존');
    }
}
