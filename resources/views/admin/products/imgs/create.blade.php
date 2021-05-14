@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
    <form action="/admin/product_imgs" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="product_id" class="mb-3">
            產品編號：<input type="text" id="product_id" name="product_id">
        </label>
        <label for="img" class="mb-3">
            路徑：<input type="text" id="img" name="img">
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection