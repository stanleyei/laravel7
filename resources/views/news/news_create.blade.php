@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
    <hr>
    <form action="/news/store" method="POST">
        @csrf
        <label for="title">
            標題：<input type="text" id="title" name="title">
        </label>
        <label for="date">
            日期：<input type="date" id="date" name="date">
        </label>
        <label for="img">
            圖片：<input type="text" id="img" name="img">
        </label>
        <label for="content">
            內文：<textarea name="content" id="content" cols="30" rows="10"></textarea>
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection