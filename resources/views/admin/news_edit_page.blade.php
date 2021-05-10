@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/news_edit.css') }}">
@endsection

@section('main')
<section>
    <div class="title">
        <h2>最新消息</h2>
    </div>
    <div class="inf-list">
        <span>資料總筆數：<b>{{$total}}</b></span>
        {{-- <span>每頁筆數：<b>10</b></span> --}}
        {{-- <span>總頁數：<b>18</b></span> --}}
        <span>目前頁次：<b>1</b></span>
    </div>
</section>
<hr>
@foreach ($newsData as $news)
<section>
    <div class="drawer_title d-flex justify-content-between align-items-center mb-2" data-toggle="collapse"
        href="#collapse{{$news->id}}" role="button" aria-expanded="false" aria-controls="collapseExample"><i
            class="fas fa-circle"> {{$news->title}}</i><i class="fas fa-arrow-alt-circle-down"></i></div>
    <div class="article collapse" id="collapse{{$news->id}}">
        <figure style="background-image: url({{$news->img}});"></figure>
        <div class="main_inf">
            <form action="/admin/news/{{$news->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label for="title" class="w-100 mt-2">
                    標題：<input type="text" class="w-50" id="title" name="title" value="{{$news->title}}">
                </label>
                <label for="date" class="input_box mr-2">
                    日期：<input type="date" id="date" name="date" value="{{$news->date}}">
                </label>
                <label for="img" class="input_box">
                    圖片：<input type="file" accept="image/*" id="img" name="img" value="{{$news->img}}">
                </label>
                <label for="content" class="w-100">
                    內文：<textarea class="w-100" name="content" id="content" cols="30"
                        rows="10">{{$news->content}}</textarea>
                </label>
                <button type="submit" class="btn submit rounded-pill w-100 mb-2">送出</button>
            </form>
            <button type="button" class="btn btn_delete rounded-pill w-100" data-id="#delete_{{$news->id}}">刪除</button>
            <form id="delete_{{$news->id}}" action="/admin/news/{{$news->id}}" method="POST">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</section>
<hr>
@endforeach

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    window.onload = () => {
            document.querySelectorAll('.btn_delete').forEach(btn => {
                btn.addEventListener('click', function (btn) {
                    const id = this.dataset.id;
                    if(confirm('確定要刪除嗎?')){
                        document.querySelector(id).submit();
                    }
                })
            })
    };
</script>
@endsection