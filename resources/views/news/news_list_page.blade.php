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
        <div class="article-tag">最新消息</div>
        <figcaption>
            <a href="/news/content/{id}">{{$news->title}}</a>
        </figcaption>
        <span>{{$news->data}}</span>
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

