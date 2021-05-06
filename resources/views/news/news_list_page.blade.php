@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_list_page.css') }}">
@endsection
    
@section('main')
<section>
    <hr>
    <div class="title">
        <div class="title-icon">
            <img src="https://www.taiwan.net.tw/att/topTitleImg/21_0001001.svg" alt="">
        </div>
        <h2>最新消息</h2>
    </div>
    <div class="inf-list">
        <span>資料總筆數：<b>175</b></span>
        <span>每頁筆數：<b>10</b></span>
        <span>總頁數：<b>18</b></span>
        <span>目前頁次：<b>1</b></span>
    </div>
</section>
<hr>
@foreach ($newsData as $news)
<section class="article">
    <figure style="background-image: url({{$news->img}});">
    </figure>
    <div>
        <div class="function-box">
            <div class="article-tag">最新消息</div>
            <div>
                <a href="/change"><button class="change_btn">編輯</button></a>
                <a href="/news/create/"><button class="change_btn">新增</button></a>
                <a href="/news/delete/{{$news->id}}"><button class="change_btn">刪除</button></a>
            </div>
        </div>
        <figcaption>
            <a href="/news/content/{{$news->id}}">{{$news->title}}</a>
        </figcaption>
        <span>{{$news->date}}</span>
        <p>
            {{$news->content}}
        </p>
    </div>
</section>
<hr>
@endforeach

@endsection

@section('js')
    
@endsection

