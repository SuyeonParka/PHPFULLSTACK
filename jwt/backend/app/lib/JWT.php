<?php

namespace App\lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT{
    protected $alg = 'SHA256';
    //원래는 시크릿키가 알아볼 수 있고 짧지 않지만 임의로
    protected $secret_key = 'php506';

    //에러 메시지(보통은 설정파일에 작성합니다.)
    protected $error_base = [
        "E01" => "Not set Token"
        ,"E02" => "Unknown form Token"
        ,"E03" => "Unauthorization Token"
        ,"E04" => "Expired Token"
        ,"E99" => "System Error" 
    ];
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
        return base64_encode($header.".".$payload.".".$signature);
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
            //토큰 유무 체크
            if($token === "") {
                throw new Exception('E01');
            }

            // 토큰 디코딩
            $decode_token = base64_decode($token);

            //토큰을 분리 
            $arr_token = explode(".", $decode_token);
        
            //배열길이가 3개인지 아닌지 체크
            //3으로 한 이유 : 토큰은 헤더, 페이로드, 시그니처 세 개로 이뤄지기 때문에
            if( count($arr_token) === 3 ) {
                throw new Exception("E02");
            }

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];
            
            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if(time() < $arr_payload->exp) {
                //에러 발생
                throw new Throwable('E04');
            }

            //검증용 signature 생성
            Log::debug("signature : ".$signature);
            $verify = hash($this->alg, $header.$payload.$this->secret_key);
            
            if($signature !== $verify) {
                throw new Throwable('E03');
            }
            
        } catch (Exception $e) {
            //예외 코드 확인
            //해당 배열안에 우리가 지정한 키가 있냐 없냐 함수
            // $code = array_key_exists( $e->getMessage(), $this->error_base ) ? $e->getMessage() : "E99";

            // $error_info = [
            //     "code" => $code
            //     ,"msg" => $this->error_base[$code]
            // ];
            // Log::debug("Error : ".$code);
            // return $error_info;

            $this->create_error_info($e);
        }
        finally {
            Log::debug('-----------------chkToken End----------------');
        }
        return "";
    }     

    /**코멘트 적는 방법
     * 메소드명 : create_error_info
     * 기능     : 에러정보 배열 작성
     * 파라미터 : String    $error_code
     * 리턴     : Array     $error_info
    */
    public function create_error_info($error_code){
        $code = array_key_exists( $error_code->getMessage(), $this->error_base ) ? $error_code->getMessage() : "E99";

        $error_info = [
            "code" => $code
            ,"msg" => $this->error_base[$code]
        ];
        Log::debug("Error : ".$code);
        return $error_info;
    }
}

?>