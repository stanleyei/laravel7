@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{asset('css/products_list.css')}}">
@endsection

@section('main')
<section>
  <hr>
  <div class="text-center">最新商品</div>
</section>
<hr>
<section>
  <ul style="list-style-type:none">
    <li>
      <div class="details">
        <h2 class="h6">Team Rainbow Unicorn</h2>
        <p class="price">$25</p>
        <div class="product">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless01.jpg">
        </div>
      </div>
    </li>
    <li>
      <div class="details">
        <h2 class="h6">Today We Ride</h2>
        <p class="price">$25</p>
        <div class="product">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless24.jpg">
        </div>
      </div>
    </li>
    <li>
      <div class="details">
        <h2 class="h6">The Communist Party</h2>
        <p class="price">$25</p>
        <div class="product">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless03.jpg">
        </div>
      </div>
    </li>
    <li>
      <div class="details">
        <h2 class="h6">My Favorite Playlist</h2>
        <p class="price">$25</p>
        <div class="product">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless06.jpg">
        </div>
      </div>
    </li>
    <li>
      <div class="details">
        <h2 class="h6">Watermelon</h2>
        <p class="price">$25</p>
        <div class="product">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless19.jpg">
        </div>
      </div>
    </li>
    <li>
      <div class="details">
        <h2 class="h6">Creature Cocktail</h2>
        <p class="price">$25</p>
        <div class="product">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless07.jpg">
        </div>
      </div>
    </li>
  </ul>
</section>
@endsection

@section('js')

@endsection