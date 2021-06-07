@extends('layouts.template')

@section('css')
<style>
  main img {
    height: 400px;
  }

  .content {
    width: 600px;
    word-break: break-all;
  }

  .figure {
    width: 130px;
    height: 130px;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center
  }

  .figure:hover {
    border: 2px black solid;
  }

  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  .number-btn{
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.603);
  }

  .number-btn:hover{
    background-color: rgb(182, 171, 171);
  }

  .number-btn:active{
    box-shadow: none;
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
    <div class="px-3 pt-5 border-left position-relative">
      <h2 class="h1">{{$productsData->name}}</h2>
      <p class="my-5 h3">Price：$ {{$productsData->price}}</p>
      <p class="content">{!!$productsData->content!!}</p>
      <button class="btn btn btn-outline-dark position-absolute font-weight-bold add-btn" style="right:0; top:0;"
        data-id="{{$productsData->id}}">放入購物車</button>
      <div class="position-absolute d-flex" style="right: 0;top:33%;">
        <div>數量</div>
        <button data-action="minus" class="number-btn border-0 rounded mx-2" style="width: 24px; height: 24px;">-</button>
        <input class="text-center mr-2" type="number" value="1" style="width: 36px; height: 24px; font-size: 14px;">
        <button data-action="plus" class="number-btn border-0 rounded" style="width: 24px; height: 24px;">+</button>
      </div>
    </div>
  </div>
</section>
<hr>
@endsection

@section('js')
<script>
  document.querySelectorAll('.add-btn').forEach(addbtns=>{
    addbtns.addEventListener('click', function(){
      const id = this.dataset.id;
      const name = this.dataset.name;
      const price = this.dataset.price;
      const formData = new FormData;
      formData.append('id', id);
      formData.append('_token', '{{ csrf_token() }}');
      fetch('{{route("shoppingcartAdd")}}',{
          method:'POST',
          body: formData,
      })
      .then(function(response){
          return response.text();
      })
      .then(function(result){
          if(result === 'success'){
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: '已放入',
              showConfirmButton: false,
              timer: 800
            });
          }
          else{
            Swal.fire({
              icon: 'error',
              text: '哇!!請再試一次!!',
            });
          };
      });
    });
  });
</script>
@endsection