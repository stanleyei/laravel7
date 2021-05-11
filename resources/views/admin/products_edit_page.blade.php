@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
    .td_bg{
        height:100px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }
    </style>
@endsection

@section('main')

@foreach ($productsData as $product)
<section class="container">
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>名稱</th>
                <th>圖片</th>
                <th>價格</th>
                <th>簡介</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td class="td_bg" style="background-image:url({{$product->img}});"></td>
                <td class="text-center">${{$product->price}}</td>
                <td>{{$product->content}}</td>
                <td>
                    <a href="admin/products/{{$product->id}}" class="btn_delete rounded-pill btn btn-success mr-2">編輯</a>
                    <button type="button" class="btn_delete rounded-pill btn btn-danger" data-id="#delete_{{$product->id}}">刪除</button>
                    <form id="delete_{{$product->id}}" action="/admin/news/{{$product->id}}" method="POST">
                </td>
            </tr>
        </tbody>
    </table>
    @csrf
    @method('DELETE')
    </form>
</section>
@endforeach

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

        window.onload = () => {
        document.querySelectorAll('.btn_delete').forEach(btn => {
            btn.addEventListener('click', function () {
                const id = this.dataset.id;
                if(confirm('確定要刪除嗎?')){
                    document.querySelector(id).submit();
                };
            });
        });
    };
    </script>
@endsection