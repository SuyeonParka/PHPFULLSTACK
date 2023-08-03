<?php

namespace App\lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT{
    protected $alg = 'SHA256';
    //원래는 시크릿키가 알아볼 수 있고 짧지 않지만 임의로
    protected $secret_key = 'php506';
    /*
        jwt생성 메소드
    */
    //array적는 부분-> 변수의 타입을 정해줌 (array형태로 받을 거라는 뜻)
    public function createJWT(Array $data) {
        Log::debug('----------createJWT Start--------------');

        // header 작성
        $header_json = json_encode([
            //alg -> 알고리즘, 잘쓰일 것 같아서 멤버변수로 선언
            'alg' => $this->alg
            ,'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);
        Log::debug('header : '. $header);
        // payload 작성 : 실제로 유저의 정보나 우리가 필요한 정보가 담겨있음
        //iat - 발급일자
        $iat = time();
        //eat - 유효기간
        $exp = $iat + 60;
        $payload_json = json_encode([
            'id' => $data['id']
            ,'iat' => $iat
            ,'exp' => $exp
        ]);
        $payload = base64_encode($payload_json);
        Log::debug('payload : '. $payload);

        // signature 작성
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug('signature : '. $signature);
       
        Log::debug('-----------------createJWT End----------------');
        return $header.".".$payload.".".$signature;
    }

        public function chkToken($token) {
            // //토큰을 분리
            // $arr_token = explode(".", $token);
            
            // $header = $arr_token[0];
            // $payload = $arr_token[1];
            // $signature = $arr_token[2];
            
            // //검증용 signature 생성
            // $verify = hash($this->alg, $header.$payload.$this->secret_key);
            
            // if($signature !== $verify) {
            //     return false;
            // }
            
            // return true;

            Log::debug('-----------------chkToken Start----------------');
            try {
                $arr_token = explode(".", $token);
            
                $header = $arr_token[0];
                $payload = $arr_token[1];
                $signature = $arr_token[2];
                
                // 토큰 유효기간 확인
                $arr_payload = json_decode(base64_decode($payload));
                if(time() < $arr_payload->exp) {
                    //에러 발생
                    throw new Throwable('exp 초과');
                }

                //검증용 signature 생성
                Log::debug("signature : ".$signature);
                $verify = hash($this->alg, $header.$payload.$this->secret_key);
                
                if($signature !== $verify) {
                    throw new Throwable('signature 다름');
                }
                
                return true;
            } catch (Throwable $th) {
                Log::debug("Error : ".$th->getMessage());
                return false;
            }
            finally {
                Log::debug('-----------------chkToken End----------------');
            }
        }

        
}
?>