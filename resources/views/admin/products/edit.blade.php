@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
<form action="/admin/products/{{$productsData->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <label for="type_id" class="mb-3">
        商品類型：
        <select name="type_id" id="type_id">
            @foreach ($typesData as $type)
            <option value="{{$type->id}}" @if ($type->id == $productsData->type_id) selected @endif>{{$type->name}}
            </option>
            @endforeach
        </select>
    </label>
    <label for="name" class="mb-3">
        商品名稱：<input type="text" id="name" name="name" value="{{$productsData->name}}">
    </label>
    <label for="price" class="mb-3">
        商品價格：<input type="number" id="price" name="price" value="{{$productsData->price}}">
    </label>
    <label for="content">
        商品簡介：<textarea name="content" id="content" cols="30" rows="10">{{$productsData->content}}</textarea>
    </label>
    <label for="img" class="mb-3">
        主要照片：
        <input type="file" id="img" name="img" accept="image/*">
        <figure class="mt-3" style="background-image: url({{$productsData->img}});"></figure>
    </label>
    <label for="imgs" class="mb-3">
        其他照片：
        <input type="file" id="imgs" name="imgs[]" accept="image/*" multiple>
        <div class="d-flex otherphoto">
            @foreach ($productsData->productImgs as $img)
            <figure class="mt-3 mr-1" style="background-image: url({{$img->img}});">
                <button type="button" class="btn_delete rounded-pill btn btn-danger mr-2" data-id="#delete_{{$img->id}}"
                    data-path="{{$img->id}}">X</button>
            </figure>
            @endforeach
        </div>
    </label>
    <div class="d-flex justify-content-center">
        <button type="submit" class="submit">送出</button>
    </div>
    </form>
@endsection

@section('js')
<script>
    window.onload = () => {
            document.querySelectorAll('.btn_delete').forEach(btn => {
                btn.addEventListener('click', function () {
                    const id = this.dataset.id;
                    if(confirm('確定要刪除嗎?')){
                        const imgId = this.dataset.id;
                        const path = this.dataset.path;
                        const formData = new FormData;
                        formData.append('id', imgId);
                        formData.append('_token', '{{ csrf_token() }}');
                        const delbtn = this;
                        fetch(`../edit/delete/${path}`,{
                            method:'POST',
                            body: formData,
                        })
                        .then(function(response){
                            return response.text();
                        })
                        .then(function(result){
                            if(result == 'success'){
                                delbtn.parentElement.remove();
                            }
                        })
                    };
                });
            });
        };
</script>
@endsection