@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{asset('css/products_list.css')}}">
@endsection

@section('main')
<hr>
<section>
  <i class="far fa-tshirt d-flex justify-content-center mb-3"></i>
  <h2 class="text-center">最新商品</h2>
</section>
<section>
  <div class="nav nav-tabs px-5" id="myTab" role="tablist">
    <a class="nav-link btns" href="" data-id="0">全部</a>
    @foreach ($allTypes as $type)
    <a class="nav-link btns" href="" data-id="{{$type->id}}">{{$type->name}}</a>
    @endforeach
  </div>
  <ul class="content-list" style="list-style-type:none">
    @foreach ($productsData as $product)
    <li class="content">
      <a href="/products/content/{{$product->id}}">
        <div class="details">
          <h2 class="h6">{{$product->name}}</h2>
          <p class="price">${{$product->price}}</p>
          <div class="product">
            <img src="{{asset($product->img)}}">
          </div>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
</section>

@endsection

@section('js')
  <script>
    window.onload = () =>{
      const btns = document.querySelectorAll('.btns');
      btns.forEach(e => {
        e.addEventListener('click',function(){
          restProducts(this.dataset.id);
        })
      });
    }

    function restProducts(typeId){
      const container = document.querySelector('.content-list');
      let formData = new FormData();
      formData.append('id', typeId);
      formData.append('_token', '{{ csrf_token() }}');

      fetch('/products/typeId',{
        method: 'POST',
        body: formData
      })
      .then(function(response){
        return response.text();
      }).then(function(result){
        container.innerHTML = result;
      })
    }
  </script>
@endsection