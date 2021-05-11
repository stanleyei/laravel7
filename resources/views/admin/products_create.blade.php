@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
    <hr>
    <form action="/admin/products/" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">
            產品名稱：<input type="text" id="title" name="name">
        </label>
        <label for="img">
            產品照片：<input type="file" id="date" name="img" accept="image/*">
        </label>
        <label for="price">
            產品價格：<input type="number" id="img" name="price">
        </label>
        <label for="content">
            產品簡介：<textarea name="content" id="content" cols="30" rows="10"></textarea>
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection