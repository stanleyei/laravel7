@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
    <form action="/admin/product_imgs/{{$imgsData->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <label for="product_id" class="mb-3">
            產品編號：<input type="text" id="product_id" name="product_id" value="{{$imgsData->product_id}}">
        </label>
        <label for="path" class="mb-3">
            路徑：<input type="text" id="path" name="path" value="{{$imgsData->path}}">
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection