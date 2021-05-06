@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_change_page.css') }}">
@endsection

@section('main')
    <hr>
    <form action="">
        <label for="title_box">
            標題：<input type="text" id="title_box">
        </label>
        <label for="date_box">
            日期：<input type="date" id="date_box">
        </label>
        <label for="img_box">
            圖片：<input type="text" id="img_box" placeholder=https://www.taiwan.net.tw/pic.ashx?qp=/0040119/13_0040119_1.jpg&sizetype=2>
        </label>
        <label for="content_box">
            內文：<textarea name="" id="" cols="151" rows="10"></textarea>
        </label>
        <label for="views_box">
            瀏覽數：<input type="number" id="views_box" value="0">
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection