@extends('layouts.app')
@section('title-block')Главная страница@endsection
@section('content')
<h1>Hello world!</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aliquid, assumenda consectetur culpa distinctio eaque enim excepturi fuga incidunt modi molestias nobis, porro possimus qui repellendus sequi sunt temporibus.</p>
@endsection
@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
