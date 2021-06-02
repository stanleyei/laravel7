@extends('layouts.template')

@section('css')
<style>
  main img{
    height: 400px;
  }

  .content {
    width: 600px;
    word-break: break-all;
  }

  .figure{
    width: 130px;
    height: 130px;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center
  }

  .figure:hover{
    border: 2px black solid;
  }
</style>
@endsection

@section('main')
<hr>
<section class="container px-5">
  <div class="d-flex text-center justify-content-around">
    <div>
      <img src="{{asset($productsData->img)}}">
      <div class="d-flex mt-5">
      @foreach ($productsData->productImgs as $img)
        <a class="figure" type="button" style="background-image: url({{asset($img->img)}})"></a>
      @endforeach
      </div>
    </div>
    <div class="px-3 pt-5 border-left">
      <h2 class="h1">{{$productsData->name}}</h2>
      <p class="my-5 h3">Price：$ {{$productsData->price}}</p>
      <p class="content">{!!$productsData->content!!}</p>
    </div>
  </div>
</section>
<hr>

@endsection

@section('js')

@endsection