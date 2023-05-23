{{-- blade는 상속 가능, ;사용 안함 --}}
{{-- 상속 @extends('해당폴더위치') --}}
@extends('layout.layout')

{{-- yield와 세트 section, 자식한테 줌 
    부모 템플릿에 해당하는 yield 부분에 자리를 차지
    title이 key
    yield의 key와 일치하면 상속받은 자식꺼가 출력--}}
@section('title', '자식 타이틀')


{{-- 처리해야하는 코드가 많을 경우에는 @section~@endsection에 소스코드를 기재해서 사용함 --}}
@section('content')
    <h2>콘텐츠 섹션입니다.</h2>
    <p>dkdkdkdk</p>
    <p>콘텐츠 끝</p>
@endsection

{{-- 부모와 같은 key가 주어졌을 때 자식꺼 출력 --}}
@section('test')
    <h2>자식의 섹션입니다.</h2>
    <p>자식자식</p>
@endsection

{{-- BladeController에 작성한 data가 여기 넘어와있음 --}}
{{-- 조건문 --}}
{{-- blade에서 제공하는 if문 --}}
{{-- 제일 아래적었는데 출력될 때 젤 위에 나오는 이유 : 상속받을 때 순서가
    기본적으로 자식한테 있는게 우선 출력, 그리고 상속받은 정보가 나중에 출력됨--}}
@section('if')
    <hr>
    <h5>IF</h5>
    @if($data['gender'] === 'M')
        <span>남자남자</span>
    @elseif($data['address'] === "대구")
        <span>대구대구</span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection

{{-- 반복문 --}}
@section('for')
    <hr>
    <h5>for</h5>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{-- BladeController에 있는 배열 키값 출력 --}}
{{-- @section('foreach')
    <hr>
    <h5>foreach</h5>
    @foreach($data as $key => $val)
        <span>{{$key.' : '.$val}}</span>
        <br>
    @endforeach
@endsection --}}


@section('foreach')
    <hr>
    <h5>foreach</h5>
    @foreach($data as $key => $val)
    {{-- count는 loop가 총 몇개인지 가져옴(데이터의 개수 가져옴)
            iteration은 반복문이 몇번 반복되고 있는지 출력함--}}
        <span>{{$loop->count.' >> '.$loop->iteration}}</span>
        <span>{{$key.' : '.$val}}</span>
        <br>
    @endforeach
@endsection

{{-- foreach와 forelse의 경우 루프문안에 $loop라고하는 변수가 자동으로 생성돼서 라라벨 프레임워크가 가지고 있음
    그리고 사용할 수 있음--}}
{{-- forelse안에서도 loop문을 사용할 수 있음 --}}
@section('forelse')
    <hr>
    <h5>forelse</h5>
    @forelse($data2 as $key => $val)
        <span>{{$key.' : '.$val}}</span>
    @empty
        <span>빈배열이에요.</span>
    @endforelse
@endsection
