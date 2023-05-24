<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @yield를 이용해서 자식한테 값이있으면 자식껄쓰고 없으면 부모타이틀 
        자식 템플릿에 해당하는 section에게 자리를 양도
        ,만약에 자식 템플릿에 해당 section이 없으면 2번째 인수를 사용--}}
    <title>@yield('title', '부모타이틀')</title>
</head>
<body>
    {{-- 다른 템플릿을 포함하는 방법 --}}

    @include('layout.inc.header')

    {{-- 여기서 content가 key값 --}}
    @yield('content')

    
    {{-- 자식 템플릿에 해당 section이 정의되어 있지 않으면 부모의 것이 실행되도록 하는 것 
        부모한테서 @section으로 시작하고 @show로 끝남--}}
    @section('test')
        <h2>부모의 섹션입니다.</h2>
        <p>부모부모</p>
    @show

    {{-- 해당 key작성(blade.blade.php파일의 section(if)문 참고) --}}
    @yield('if')
    @yield('for')
    @yield('foreach')
    @yield('forelse')
    @yield('foreach2')

    {{-- 2번째 인수로 값을 셋팅하고, 해당 파일에서 변수로써 사용 가능 --}}
    {{--  사실 include에는 두번째 인수가 들어감, 배열로 넘겨줌--}}
    @include('layout.inc.footer', ['key1' => 'key1로 세팅'])

</body>
</html>