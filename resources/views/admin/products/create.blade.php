@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
    <form action="/admin/products/" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="type" class="mb-3">
            商品類型：
            <select name="type_id" id="type">
                @foreach ($typesData as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            <select name="type_id" id="type">
                @foreach ($genderData as $gender)
                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                @endforeach
            </select>
        </label>
        <label for="name" class="mb-3">
            商品名稱：<input type="text" id="name" name="name">
        </label>
        <label for="img" class="mb-3">
            主要照片：<input type="file" id="img" name="img" accept="image/*">
        </label>
        <label for="imgs" class="mb-3">
            其他照片：<input type="file" id="imgs" name="imgs[]" accept="image/*" multiple>
        </label>
        <label for="price" class="mb-3">
            商品價格：<input type="number" id="price" name="price">
        </label>
        <label for="content">
            商品簡介：<textarea name="content" id="content" cols="30" rows="10"></textarea>
        </label>
        <button type="submit" class="submit">送出</button>
    </form>
@endsection

@section('js')
    
@endsection