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
        data-id="{{$productsData->id}}" data-name="{{$productsData->name}}" data-price="{{$productsData->price}}">放入購物車</button>
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
      formData.append('name', name);
      formData.append('price', price);
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
            Alert('已放入 ^^');
          }
          else{
            Alert('沒成功喔，請再試一次 ^^');
          }
      })
    });
  });

  function Alert(str) {    
    var msgw,msgh,bordercolor;    
    msgw=350;//提示視窗的寬度    
    msgh=80;//提示視窗的高度    
    titleheight=25 //提示視窗標題高度    
    bordercolor="#336699";//提示視窗的邊框顏色    
    titlecolor="#99CCFF";//提示視窗的標題顏色    
    var sWidth,sHeight;    
    //獲取當前視窗尺寸    
    sWidth = document.body.offsetWidth;    
    sHeight = document.body.offsetHeight;    
    //背景div    
    var bgObj=document.createElement("div");    
    bgObj.setAttribute('id','alertbgDiv');    
    bgObj.style.position="absolute";    
    bgObj.style.top="0";    
    bgObj.style.background="#E8E8E8";    
    bgObj.style.filter="progid:DXImageTransform.Microsoft.Alpha(style=3,opacity=25,finishOpacity=75";    
    bgObj.style.opacity="0.6";    
    bgObj.style.left="0";    
    bgObj.style.width = sWidth + "px";    
    bgObj.style.height = sHeight + "px";    
    bgObj.style.zIndex = "10000";    
    document.body.appendChild(bgObj);    
    //建立提示視窗的div    
    var msgObj = document.createElement("div")    
    msgObj.setAttribute("id","alertmsgDiv");    
    msgObj.setAttribute("align","center");
    msgObj.setAttribute("class","alert-box");    
    msgObj.style.background="white";    
    msgObj.style.borderRadius="20px";   
    msgObj.style.position = "absolute";    
    msgObj.style.left = "50%";    
    msgObj.style.font="12px/1.6em Verdana, Geneva, Arial, Helvetica, sans-serif";    
    //視窗距離左側和頂端的距離     
    msgObj.style.marginLeft = "-225px";    
    //視窗被捲去的高+（螢幕可用工作區高/2）-150    
    msgObj.style.top = document.body.scrollTop+(window.screen.availHeight/2)-150 +"px";    
    msgObj.style.width = msgw + "px";    
    msgObj.style.height = msgh + "px";    
    msgObj.style.textAlign = "center";    
    msgObj.style.lineHeight ="25px";    
    msgObj.style.zIndex = "10001";    
    document.body.appendChild(msgObj);    
    //提示資訊標題    
    var title=document.createElement("h4");    
    title.setAttribute("id","alertmsgTitle");    
    title.setAttribute("align","left");    
    title.style.margin="0";      
    title.style.paddingLeft="10px";      
    title.style.background = bordercolor;    
    title.style.filter="progid:DXImageTransform.Microsoft.Alpha(startX=20, startY=20, finishX=100, finishY=100,style=1,opacity=75,finishOpacity=100);";    
    title.style.opacity="0.75";    
    title.style.border="1px solid " + bordercolor;
    title.style.borderTopLeftRadius="20px";
    title.style.borderTopRightRadius="20px";      
    title.style.height="18px";         
    document.getElementById("alertmsgDiv").appendChild(title);    
    //提示資訊    
    var txt = document.createElement("p");    
    txt.setAttribute("id","msgTxt");    
    txt.style.margin="16px 0"; 
    txt.style.fontSize="24px";   
    txt.style.color=bordercolor;   
    txt.style.fontWeight="bold";   
    txt.innerHTML = str;    
    document.getElementById("alertmsgDiv").appendChild(txt);    
    //設定關閉時間    
    window.setTimeout("closewin()",1200);     
  }

  function closewin() {    
      document.body.removeChild(document.getElementById("alertbgDiv"));    
      document.getElementById("alertmsgDiv").removeChild(document.getElementById("alertmsgTitle"));    
      document.body.removeChild(document.getElementById("alertmsgDiv"));    
  }  
</script>
@endsection