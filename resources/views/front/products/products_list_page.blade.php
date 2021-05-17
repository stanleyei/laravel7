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
  <ul class="nav nav-tabs px-5" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
        aria-selected="true">全部</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
        aria-selected="false">長袖</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
        aria-selected="false">短袖</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="none-tab" data-toggle="tab" href="#none" role="tab" aria-controls="none"
        aria-selected="false">無袖</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
    </div>
    <div class="tab-pane fade" id="none" role="tabpanel" aria-labelledby="none-tab">
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
    </div>
  </div>
</section>

@endsection

@section('js')

@endsection