@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/news_create.css') }}">
@endsection

@section('main')
<hr>
<form action="/admin/news/" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">
        標題：<input type="text" id="title" name="title">
    </label>
    <label for="date">
        日期：<input type="date" id="date" name="date">
    </label>
    <label for="img">
        圖片：<input type="file" accept="image/*" id="img" name="img">
    </label>
    <label for="content">
        內文：<textarea name="content" id="content" cols="30" rows="10"></textarea>
    </label>
    <button type="submit" class="submit">送出</button>
</form>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#content').summernote({
            width: 1270,
            height: 300,
            callbacks: {
                onImageUpload: function(files) {
                    const formData = new FormData();
                    formData.append('img', files[0]);
                    formData.append('_token', '{{ csrf_token() }}');
                    fetch('{{route("summernoteStore")}}',{
                        method:'POST',
                        body: formData,
                    })
                    .then(function(response){
                        return response.text();
                    })
                    .then(function(path){
                        $('#content').summernote('insertImage', path);
                    })
                },
                onMediaDelete: function(element){
                    const formData = new FormData();
                    formData.append('src', element.attr('src'));
                    formData.append('_token', '{{ csrf_token() }}');
                    fetch('{{route("summernoteDelete")}}',{
                        method:'POST',
                        body: formData,
                    })
                }
            }
        });
    });
</script>
@endsection