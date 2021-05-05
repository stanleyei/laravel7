@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_change_page.css') }}">
@endsection

@section('main')
    <form action="">
        <label for="title_box">
            標題 <input type="text" id="title_box">
        </label>
        <label for="date_box">
            日期 <input type="date" id="date_box">
        </label>
        <label for="img_box">
            圖片 <input type="text" id="img_box">
        </label>
        <label for="content_box">
            內文 <input type="text" id="content_box">
        </label>
        <label for="views_box">
            瀏覽數 <input type="number" id="views_box">
        </label>
        <button type="submit">更改文章</button>
    </form>
@endsection

@section('js')
    
@endsection