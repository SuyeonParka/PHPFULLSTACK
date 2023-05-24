<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 모델 생성 : php artisan make:model Board -mfs
    // [-mfs] 옵션으로 migration과 factory와 seeder를 한번에 생성

    // 테이블 정의 
    // 변수명 table로 정해져있음

    // 테이블 정의 (정의하지 않으면 클래스명의 복수형을 암묵적으로 인식함)
    protected $table = 'boards';

    // PK 정의 (정의하지 않으면 'id'컬럼을 pk로 인식함)
    protected $primaryKey = 'bno';

    // 대량 할당을 이용한 취약성 대책(2가지)
    // 둘 중에 하나만 써야함. 둘 다 쓰면 에러남
    // 1. 화이트 리스트 방식 : 수정할 수 있는 컬럼을 설정
    // 우리가 수정이 가능한 컬럼의 이름들을 적어줌
    // protected $fillable = ['컬럼1', '컬럼2'];

    // 2. 블랙 리스트 방식 : 수정할 수 없는 컬럼을 설정
    // 이 컬럼들은 우리가 수정을 안할거다, 할 수 없다.
    // protected $guarded = ['컬럼1', '컬럼2'];

    //편법임
    protected $guarded = [];
}
