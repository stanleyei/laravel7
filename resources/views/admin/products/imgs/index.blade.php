@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection

@section('main')

<section class="container">
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>編號</th>
                <th>產品編號</th>
                <th>路徑</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($imgsData as $img)
            <tr>
                <td>{{$img->id}}</td>
                <td>{{$img->product_id}}</td>
                <td>{{$img->img}}</td>
                <td>
                    <a href="/admin/product_imgs/{{$img->id}}/edit" class="rounded-pill btn btn-success mr-2">編輯</a>
                    <button type="button" class="btn_delete rounded-pill btn btn-danger"
                        data-id="#delete_{{$img->id}}">刪除</button>
                    <form id="delete_{{$img->id}}" action="/admin/product_imgs/{{$img->id}}" method="POST">
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