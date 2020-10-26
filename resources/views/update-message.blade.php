@extends('layouts.app')
@section('title-block')Обновление записи@endsection
@section('content')
    <h1>Обновление записи</h1>
    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" value="{{ $data->name }}"  class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите Email</label>
            <input type="text" name="email" placeholdAer="Введите email" id="email" value="{{ $data->email }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" value="{{ $data->subject }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщения</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение">{{ $data->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Редактировать</button>
    </form>
@endsection
