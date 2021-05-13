@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<style>
    .td_bg {
        height: 100px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .td_content {
        max-width: 550px;
        max-height: 110px;
        width: 550px;
        height: 110px;
        word-break: break-all;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
    }
</style>
@endsection

@section('main')

<section class="container">
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>編號</th>
                <th>類型</th>
                <th>名稱</th>
                <th>圖片</th>
                <th>價格</th>
                <th>簡介</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productsData as $product)
            <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td>{{$product->productTypes->name}}</td>
                <td>{{$product->name}}</td>
                <td class="td_bg" style="background-image:url({{$product->img}});"></td>
                <td class="text-center">${{$product->price}}</td>
                <td class="td_content">{{$product->content}}</td>
                <td>
                    <a href="/admin/products/{{$product->id}}/edit" class="rounded-pill btn btn-success mr-2">編輯</a>
                    <button type="button" class="btn_delete rounded-pill btn btn-danger mr-2"
                        data-id="#delete_{{$product->id}}">刪除</button>
                    <form id="delete_{{$product->id}}" action="/admin/products/{{$product->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

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