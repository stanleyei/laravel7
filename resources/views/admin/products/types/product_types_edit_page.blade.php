@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
    <form action="/admin/product_types/{{$typesData->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <label for="name" class="mb-3">
            類別名稱：<input type="text" id="name" name="name" value="{{$typesData->name}}">
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection