<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//주소확인
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //-----------------
        // 쿼리 빌더
        // pure php에서 한 pdo 작업을 라라벨에서 간단하게 함
        // 쿼리와 프리페어 스테이트먼트만 해주면 됨
        //// dd()가 뭐죠?
        // env파일 옮겨야함(db비번이랑 적혀있음)
        // db파일 불러오는 법
        // prepare stmt는 보안때문에 꼭 해줘야함
        //-----------------
        // $result = DB::select('select * from categories');
        //예시
        $no = '5';
        //['키'=>'$해당하는 값']
        // $result = DB::select('select * from categories where no=:no', ['no' => $no]);
        //다른 방법
        // $result = DB::select('select * from categories where no = ? and no = ?', [$no => 7]);

        //categories의 no컬럼임
        $input = ['4', '7', '8'];
        //게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개)
        // $result1 = DB::select('select 
        //                     bo.bno, bo.btitle, ca.name
        //                     from boards as bo
        //                     inner join categories as ca
        //                     on bo.category = ca.no
        //                     where no=?
        //                     or no=?
        //                     or no=?
        //                     order by bo.bno limit 5'
        //                     , $input
        //                     );
                            // 다른 방법
                            // 'select
                            // bo.bno, bo.btitle, ca.name
                            // from boards as bo
                            // inner join categories as ca
                            // on bo.category = ca.no
                            // where no:no1
                            // or no=no2
                            // or no=no3
                            // order by bo.bno limit 5'
                            // ,['no1'=> $input[0], 'no2' => $input[1], 'no3' => $input[2]

                            // 쌤이한거(join문 맞음 table두개라서)
                            // in은 속도가 느림
                            // 'select b.bno, b.btitle, c.name
                            //     from categories c, boards b
                            //     where c.no = b.category
                            //     and c.no in(?, ?, ?) 
                            //     order by b.bno limit 5', $input

                            // 동호님꺼
                            // ?했던 부분을 key로 줘도 됨
                            // pure php에서는 이렇게 하면 에러남
                            // 라라벨이 알아서 매핑해줌
                            // 추천하는 방법은 아님
                            // 'select b.bno, b.btitle, c.name
                            //     from categories c, boards b
                            //     where c.no = b.category
                            //     and c.no in(:no1, :no2, :no3) 
                            //     order by b.bno limit 5', $input
        //values(\'ss\')이스케이프 쓰는 방법
        //라라벨의 now()는 UTC기준이라서 변경필요,,?
        // $result2 = DB::insert('insert into boards(category, btitle, bcontent, created_at, updated_at)
        //                         values(:category, :btitle, :bcontent, NOW(), NOW())'
        //                         ,[ 
        //                             'category' => '5'
        //                             , 'btitle' => '제목'
        //                             , 'bcontent' => '내용'
        //                         ]);
                            // 아란언니 방법
                            // values(?, ?, ?, now(), now()), ['1', 'gg', 'gg']

                            // 방금 등록한 겟글의 제목 : test, 내용 : testtest로 변경해 주세요.
        // $result3 = DB::update('update boards set btitle = ?, bcontent = ?, updated_at = now() where bno = ?'
        //                         , [
        //                             'test'
        //                             ,'testtest'
        //                             ,2002
        //                         ]);

        // $result4 = DB::delete('delete from boards where bno in( ?, ? )', [2001, 2002]);
        // $result4 = DB::delete('delete from boards where bno = ?', [2002]);
        // return var_dump($result4);

        //------------------------
        // 쿼리 빌더 체이닝
        //------------------------
        $no = '5';
        // get앞에 쓴 체이닝을 써서 가져오겠다는 의미
        // select문과 같음
        // $result = DB::table('categories')->where('no', '=', $no)->get(); // TODO : 삭제 예정 이런식으로 사용함(조심히 사용)

        //카테고리가 5, 8번을 가져오기
        //select * from categories where no = ? or no = ?
        //위 방법처럼 or사용법
        //부등호 = 생략하면 자동으로 같다라고 인식함
        $no1= '5';
        $no2 = '8';
        // $result = DB::table('categories')->where('no', $no1)->orwhere('no', $no2)->dd();
        
        //select * from categories where no in (?, ?)
        //위 방법을 아래처럼 in은 or
        // $result = DB::table('categories')->whereIn('no', [$no1, $no2])->dd();

        //select * from categories where no NOT IN (?, ?)
        // in의 데이터를 제외한 데이터만 추출
        // not in은 and조건이 걸림 뭔말이냐?
        // $result = DB::table('categories')->whereNotIn('no', [$no1, $no2])->dd();
        
        // select id, no, name from categories
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')->dd();

        // select id, no, name from categories order by name desc
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')
        //     ->orderBy('name', 'desc')
        //     ->get();

        //and구문 
        // $result = DB::table('categories')->where('no', '=', $no1)
        //     ->where('no', '=', $no2)->get();

        // *** 주의해서 사용(사용 하지마삼) *** whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1);
        
        //first() : Limit 1과 비슷한 작동, 실패 시 false 리턴
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        // firstOrFail() : first() 같은 동작을 하는데, 실패시 결과가 예외 발생
        // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOrFail();
        
        // 집계 메소드
        // 결과의 레코드수 반환
        // $result = DB::table('boards')->count();
        // 해당 컬럼의 최대치를 반환
        // $result = DB::table('boards')->max('bno');

        // 트랜잭션
        // 트랜잭션 시작
        // db 커넥트 파기하는거 라라벨이 대신 해줘서 안해줘도 됨
        // DB::beginTransaction();
        //커밋
        // DB::commit();
        //롤백
        // DB::rollback();

        // 카테고리가 활성화 되어 있는 게시글의 카테고리별 개수를 출력해라
        // 카테고리 번호, 카테고리명, 개수
        $result = DB::table('categories')
            ->select(DB::raw('categories.no, categories.name, count(*)'))
            // 쌤이 한거 (raw뒤에 써도 되는데 뒤에 쓰니까 오류나서 앞으로 땡겨놓음)
            // ->select('categories.no, categories.name, DB::raw('count(*) as cnt'))
            ->join('boards', 'categories.no', '=', 'boards.category')
            ->where('active_flg', '=', '1')
            ->groupBy('categories.no')
            ->groupBy('categories.name')
            // 같이 써도 되는데 같이 쓰니까 안되길래 따로 씀
            // ->groupBy('categories.no', 'categories.name')
            ->get();
            // raw : 이 메소드가 해당하는 값을 문자열로 인식하게 해줌
            // count는 mariadb에서 쓰는 함수인데 이거를 문자열로 인식하게 함
            // group by 두 번 적는 이유 
            // select에 적힌 컬럼들을 원래 다 적어줘야함 (select로 출력해줘야할 컬럼들)
            // mariadb에서 하나만 적어도 적용되는 건 mariadb, mySQL에만 적용됨
        return var_dump($result);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "만들지 마";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "저장";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "보여줘";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "편집";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
