@extends('layouts.app')
@section('title-block')Все сообщения@endsection
@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element->subject }}</h3>
            <p>{{ $element->email }}</p>
            <p><small>{{ $element->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $element->id) }}"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection
