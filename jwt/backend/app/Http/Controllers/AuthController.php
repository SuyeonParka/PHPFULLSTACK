<?php

namespace App\Http\Controllers;

use App\lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{   
    //obj_jwt에 JWT가 자동으로 들어감
    protected $obj_jwt;

    //construct가 없어도 실행이 됐던 이유 : 우리가 안적어주면 이 형태로 디폴트로 자동으로 들어가있기 때문에
    public function __construct()
    {
        $this->obj_jwt = new JWT();
    }
    /*
        jwt토큰 생성
    */
    //아이디, 비번을 받아야해서 리퀘스트
    function issueToken(Request $req) {
        Log::debug('----------issueToken Start--------------');
        Log::debug('id', $req->only('id'));

        //유효성 체크

        //db에서 유저 검색

        //jwt 생성
        //only 매소드는 연상배열로 가져옴
        $token = $this->obj_jwt->createJWT($req->only('id'));
        Log::debug('token'. $token);
        Log::debug('----------issueToken End--------------');

        //에러데이터 생성
        $res = [
            'errflg' => '0'
            ,'token' => $token
        ];
        return response(json_encode($res), 200);
    }

    /* 
        토큰 검증용
    */
    public function chk(Request $req) {
        $token = $req->header('Authorization');

        $res = [
            'errflg' => '0'
            ,'msg' => 'OK'
        ];
        //true or false로 넘어옴 
        if(!$this->obj_jwt->chkToken($token)) {
            $res = [
                'errflg' => '1'
                ,'msg' => '유효한 토큰이 아닙니다.'
            ];
        }

        return response(json_encode($res), 200);
    }
}
