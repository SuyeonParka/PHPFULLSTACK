<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * localhost/tasks
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Tasks.index!!';
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지 (글 작성 페이지)
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return 'Tasks.create!!';
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성 처리(위에서 입력한 거를 버튼을 눌렀을 때 post로 처리한 거)
     * Request : 유저에게서 받은 값을 사용하겠다는 의미
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrOnly = $request->only(['id', 'pw']);
        // $request->get('pw') 다른 방식
        // $arrOnly = $request->all();

        $result = $arrOnly['id'].",".$arrOnly['pw'];
        // 새로운 방법 request(바덤프로 찍었을 때 배열로 나옴)는 객체임
        // $result = $request->['id'].",".$request['pw']; 
        return $result;
    }

    /**
     * Display the specified resource.
     * 리소스 조회 페이지 (디테일 페이지)
     * localhost/task/12
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Tasks.show!! : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼 페이지(디테일에서 해당하는 수정페이지로 가는거)
     * localhost/task/12/edit
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Tasts.edit!! : '.$id;
    }

    /**
     * Update the specified resource in storage.
     * 리소스 수정 처리(수정버튼 눌렀을 때 하는 처리)
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 여기 $id는 우리가 보낸 세그먼트 아규먼트를 받아옴
     * $request는 유저가 우리에게 보낸 모든 정보가 다 담겨있음(var_dump부분 참고)
     */
    public function update(Request $request, $id)
    {
        var_dump($request); // 어떤게 있는지 보기
         //사용자가 전달하는 모든 데이터(모든 정보를 획득하는 건 아님)를 획득(배열로옴)
        $arrAll = $request->all();
        //사용자가 전달한 데이터 중에 해당하는 데이터만 획득 (only에는 우리가 배열로서 뽑고 싶은 key값만 입력,배열로옴)
        $arrOnly = $request->only(['id', 'name']);
        //우리가 필요한 특정한 값 딱 하나만 추출 가능(데이터의 값을 획득하는 거라서 배열이 아님)
        $oneGet = $request->get('pw');
        
        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);
        return 'Tasks.update!! : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tasks.destroy!! : '.$id;
    }
}
