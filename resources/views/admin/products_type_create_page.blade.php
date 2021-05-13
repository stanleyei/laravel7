@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
    <form action="/admin/product_types" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name" class="mb-3">
            類型名稱：<input type="text" id="name" name="name">
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection