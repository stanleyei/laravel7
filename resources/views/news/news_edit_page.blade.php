@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_change_page.css') }}">
@endsection

@section('main')
    <hr>
    <form action="/news/update/{{$newsData[0]->id}}" method="POST">
        @csrf
        <label for="title">
            標題：<input type="text" id="title" name="title">
        </label>
        <label for="date">
            日期：<input type="date" id="date" name="date">
        </label>
        <label for="img">
            圖片：<input type="text" id="img" name="img" placeholder=https://www.taiwan.net.tw/pic.ashx?qp=/0040119/13_0040119_1.jpg&sizetype=2>
        </label>
        <label for="content">
            內文：<textarea name="content" id="" cols="151" rows="10"></textarea>
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection