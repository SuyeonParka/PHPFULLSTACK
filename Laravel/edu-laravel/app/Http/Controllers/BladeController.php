<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index() {
        $arr = [
            'name' => '박미현'
            ,'gender' => 'F'
            ,'height' => '174cm'
            ,'age' => '26'
            ,'birth' => '19980809'
            ,'address' => '구미girl~'
            ,'tel' => '01080809090'
        ];

        // data를 key로 보내줌
        // 라라벨이 계속 체이닝을 하면서 연결함
        // $arr2에 배열값을 넣으면 '빈배열이에요'라고 뜨지 않고 0:값 1:값 이런식으로 나옴
        $arr2 =[];
        return view('blade')->with('data', $arr)->with('data2', $arr2);
    }

}
