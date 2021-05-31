@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_content_page.css') }}">
@endsection

@section('main')
<div>
    <hr>
    <h2>{{$newsData->title}}</h2>
    <div class="inf-list">
        <span>發布日期：<p>{{$newsData->date}}</p></span>
        <span>瀏覽次數：<p>{{$newsData->views}}</p></span>
    </div><br>
    <hr>
</div>
<article>
    {!!$newsData->content!!}
</article>
<hr>
@endsection

@section('js')
    
@endsection