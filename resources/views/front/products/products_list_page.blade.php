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
    <button class="nav-link btns" data-id="0">全部</button>
    @foreach ($allTypes as $type)
    <button class="nav-link btns ml-1" data-id="{{$type->id}}">{{$type->name}}</button>
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
      const btns = document.querySelectorAll('.btns');
      btns.forEach(e => {
        e.addEventListener('click',function(){
          restProducts(this.dataset.id);
        })
      });
      
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