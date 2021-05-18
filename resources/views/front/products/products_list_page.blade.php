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
    @foreach ($allTypes as $type)
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="contact" data-toggle="tab" href="#contact{{$type->id}}" role="tab" aria-controls="profile" aria-selected="false">{{$type->name}}</a>
    </li>
    @endforeach
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
    {{-- @foreach ($productsData as $product)
    <div class="tab-pane fade" id="contact{{$product->productTypes->id}}" role="tabpanel" aria-labelledby="tab{{$product->productTypes->id}}">
      <ul class="content-list" style="list-style-type:none">
        @foreach ($allTypes->find(1)->products as $type)
        <li class="content">
          <a href="/products/content/{{$type->id}}">
            <div class="details">
              <h2 class="h6">{{$type->name}}</h2>
              <p class="price">${{$type->price}}</p>
              <div class="product">
                <img src="{{asset($type->img)}}">
              </div>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
    @endforeach --}}
    <div class="tab-pane fade" id="contact{{$allTypes->find(1)->id}}" role="tabpanel" aria-labelledby="profile-tab">
      <ul class="content-list" style="list-style-type:none">
        @foreach ($allTypes->find(1)->products as $product)
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
    <div class="tab-pane fade" id="contact{{$allTypes->find(2)->id}}" role="tabpanel" aria-labelledby="contact-tab">
      <ul class="content-list" style="list-style-type:none">
        @foreach ($allTypes->find(2)->products as $product)
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
    <div class="tab-pane fade" id="contact{{$allTypes->find(3)->id}}" role="tabpanel" aria-labelledby="none-tab">
      <ul class="content-list" style="list-style-type:none">
        @foreach ($allTypes->find(3)->products as $product)
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