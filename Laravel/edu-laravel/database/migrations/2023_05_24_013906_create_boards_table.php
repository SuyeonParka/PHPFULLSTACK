<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성 : php artisan make:migration create_boards_table
    // create_boards_table은 파일명의 날짜 뒤에 들어갈 파일명
    // 이렇게 만들면 boards가 테이블 명으로 지정됨
    // migration 실행(모든 migration파일의 up()메소드를 실행) : php artisan migrate (migration 파일에서 up메소드가 실행됨
    // migration폴더에있는 모든 파일이 한번에 실행됨
    // reset은 migration자체를 삭제, rollback은 가장 실행된 migration만 그 시점으로 돌아감
    // migration 리셋(모든 migration 파일의 down()메소드를 실행) : php artisan migrate:reset
    // migration 롤백(가장 마지막에 실행한 migration의 내용을 롤백) : php artisan migrate:rollback

    // 시더(초기 데이터 생성) : database\seeders의 각 클래스 파일 확인
    // 팩토리 (더미 데이터 생성할때 많이 사용) : database\factories의 각 클래스 파일 확인
    

    // ** bigint와 int의 차이점
    // ** database server가 빵빵하다면 bigint사용해도 괜찮은데,,
    // ** bigint는 8바이트, int는 4바이트
    // ** id값이 43억이 넘어가는 아주 큰 db를 사용한다면 고민없이 bigint사용

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일, 삭제일자, 삭제여부
            // 컬럼명 bno이고 big_int타입의 pk이고 auto_increment가 적용되는 아이
            $table->id('bno');
            // 1글자 준이유 : 10개까지 할거라서 0~9
            // index사용 이유 : 속도를 빠르게 하기 위해서 
            // 대신 update, delete같은 수정작업 할 땐 느림
            // 그래서 모든 컬럼에 넣는 건 안됨
            // 특별히 where절에서 많이 쓸 때 많이 사용
            // 우리가 찾고자하는 db양이 15%이하일 때 index씀 그 이상이면 풀로 줌
            // char(1), not nuull, index추가(활성화)
            $table->char('category', 1)->index();
            // db마다 데이터 타입이 조금씩 달라서 varchar안쓰고 string사용
            // varchar(100)로 생성 기본적으로 not null로 생성 (nullable안줘서 기본값 적용)
            $table->string('btitle', 100);
            //varchar최대가 4000자임
            //varchar(4000), not null
            $table->string('bcontent', 4000);
            //created_at, updated_at를 자동으로 생성해주는 아이, null 허용(timpstamps함 드가보삼)
            $table->timestamps();
            //lalavel이 기대하는 이름으로 줌
            $table->timestamp('deleted_at')->nullable();
            //삭제여부 플래그
            // char라서 0을 문자열로 넣음 *문자열인지 숫자인지 중요*, not null
            // char가 select할 때 가장 빨라서 int(가장 느림)안쓰고 char씀
            $table->char('deleted_flg', 1)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
