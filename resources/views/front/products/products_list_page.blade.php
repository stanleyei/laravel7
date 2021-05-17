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
  <div class="btn_list">
    <button>全部</button>
    <button>長袖</button>
    <button>短袖</button>
    <button>無袖</button>
  </div>
  <ul style="list-style-type:none">
    @foreach ($productsData as $product)
    <li>
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

@endsection