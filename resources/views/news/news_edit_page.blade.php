@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_change_page.css') }}">
@endsection

@section('main')
    <hr>
    <form action="/news/update/{{$newsData->id}}" method="POST">
        @csrf
        <label for="title">
            標題：<input type="text" id="title" name="title"  value="{{$newsData->title}}">
        </label>
        <label for="date">
            日期：<input type="date" id="date" name="date" value="{{$newsData->date}}">
        </label>
        <label for="img">
            圖片：<input type="text" id="img" name="img" value="{{$newsData->img}}">
        </label>
        <label for="content">
            內文：<textarea name="content" id="content" cols="151" rows="10">{{$newsData->content}}</textarea>
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection