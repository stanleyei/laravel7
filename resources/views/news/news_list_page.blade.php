@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news_list_page.css') }}">
@endsection
    
@section('main')
<section>
    <hr>
    <div class="title">
        <div class="title-icon">
            <img src="https://www.taiwan.net.tw/att/topTitleImg/21_0001001.svg" alt="">
        </div>
        <h2>最新消息</h2>
    </div>
    <div class="inf-list">
        <span>資料總筆數：<b>175</b></span>
        <span>每頁筆數：<b>10</b></span>
        <span>總頁數：<b>18</b></span>
        <span>目前頁次：<b>1</b></span>
    </div>
</section>
<hr>
<section class="article">
    <figure style="background-image: url(https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg);">
    </figure>
    <div>
        <div class="article-tag">最新消息</div>
        <figcaption>
            <a href="">經典小鎮升級3.0正式開跑　小鎮逗鎮趣 集章抽好禮</a>
        </figcaption>
        <span>2021-05-03</span>
        <p>
            為推動「小鎮漫遊」，交通部觀光局於108年配合「小鎮漫遊年」遴選40個特色小鎮，109年延續小鎮熱潮，配合「脊梁山脈旅遊年」遴選出30個經典/山城小鎮，今（110）年配合「自行車旅遊年」遴選出30個經典/自行車小鎮，邀請大家慢騎自行車小鎮，領略小鎮在地之美。交通部觀光局張錫聰局長表示，為推動小鎮漫遊年行銷主軸，今年完成百大經典小鎮的最後一塊拼圖，透過整合小鎮觀光資源，打造「百大經典小鎮護照」並辦理電子集章活動，集章點遍布各小鎮景點、借問站與特色店家
        </p>
    </div>
</section>
<hr>
@endsection

@section('js')
    
@endsection
