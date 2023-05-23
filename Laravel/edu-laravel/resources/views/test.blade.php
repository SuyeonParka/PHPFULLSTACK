<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index View</title>
</head>
<body>
    <h1>Tests.index!!!</h1>
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index')}}">Tasks.index</a>
    <br>
    {{-- route:list 보면 {task}라고 세그먼트 파라미터가 있다 이거를 두번째 파라미터로 줌 --}}
    {{-- 값 세팅하는 법 . route는 두번째 파라미터도 가질 수 있음 
        이름은 route:list 참고, 해당하는 키 task 값 13--}}
    <a href="{{route('tasks.show', ['task' => 13])}}">Tasks.show</a>
    <br>
    <form action="{{route('tasks.update', ['task' => 1])}}" method="POST">
        @csrf 
        {{-- route:list에 update부분 보면 put 적혀있음 --}}
        {{-- update는 list를 보면 put이나 patch로 실행되는데 form태그는
            method를 get, post밖에 사용 못해서 method에 put을 적어줘야함
            값이 post로 들어가지만 라라벨이 put으로 인식하고 값이 들어감--}}
        @method('put'); 
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
        <button type="submit">Tasks.update</button>
    </form>
    {{-- 값을 보내면 컨트롤러에서 값을 받아서 사용 함 --}}
    <br>
    <a href="{{route('tasks.edit', ['task' => 999])}}">Tasks.edit</a>
    <br>
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf
        {{-- @method('post'); --}}
        <input type="text" name="id">
        <input type="text" name="pw">
        <button type="submit">Tasks.store</button>
    </form>
</body>
</html>