<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// 시더 use
// CategorySeeder의 namespace참고
use Database\Seeders\CategorySeeder; 
use Database\Seeders\ListSeeder; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 초기 데이터 삽입용 시더 호출
        // reset하고 나서는 이부분 살려야함
        // 기존의 들어가있던 데이터까지 다 사라져서
        // CategorySeeder는 드가보면 어떤 데이터 드가있는지 앎
        // $this->call(CategorySeeder::class);
        // $this->call(BoardSeeder::class);
        $this->call(MycategorySeeder::class);


      // 더미 데이터 삽입용 팩토리 호출
        // \App\Models\Board::factory(1000)->create();

        // WHILE문이 한 번 실행될 떄마다 1만건을 저장 
        // 5만건이 한꺼번에는 안됨
        // 이렇게 하는 이유는 우리 메모리에 5만건이 한꺼번에 안들어감
        // $cnt = 0;
        // while( $cnt <= 5 ) {
        //     \App\Models\Board::factory(10000)->create();
        //     $cnt++;
        // }
        // 해당 모델 클래스 팩토리(10개) 만들겠다.
        // \App\Models\User::factory(10)->create();


        //마이그레이션과 시딩을 함께하는 방법
        //php artisan migrate --seed
    }
}
