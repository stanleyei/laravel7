<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news_list_page</title>
    <style>
        * {
            font-family: Microsoft JhengHei;
        }

        body,
        html {
            margin: 0;
            padding: 0;
        }

        main{
            max-width: 1400px;
            margin: 0 auto;
        }

        .title {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .title-icon {
            width: 75px;
            height: 75px;
            padding-top: 26px;
        }

        h2 {
            font-size: 32px;
        }

        .inf-list {
            text-align: end;
            padding-right: 50px;
        }

        .inf-list>span {
            padding: 0 15px;
            font-size: 18px;
        }

        .inf-list>span>b {
            color: #EB9500;
        }

        article {
            display: flex;
        }

        figure {
            max-width: 480px;
            width: 33vw;
            height: 20vw;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .article-tip {
            width: 110px;
            height: 38px;
            margin-top: 16px;
            background-color: #A44CC4;
            text-align: center;
            line-height: 38px;
            font-size: 16px;
            color: #ffffff;
        }

        figcaption {
            padding: 25px 0;
            font-size: 24px;
            font-weight: bold;
        }

        figcaption~span {
            font-size: 20px;
            font-weight: bold;
            color: #EB9500;
        }

        figcaption~div {
            max-width: 850px;
            width: 60vw;
            padding-top: 18px;
            line-height: 30px;
            font-size: 18px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        @media (max-width:1000px){
            main{
                padding: 0 30px;
            }

            article {
                display: block;
            }

            figure {
                background-image: url(https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2);
                max-width: 100%;
                width: 100%;
                height: 50vw;
                margin: 0 auto;
            }

            figcaption~div{
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <main>
        <div>
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
        </div>
        <hr>
        <article>
            <figure style="background-image: url(https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg);">
            </figure>
            <div>
                <div class="article-tip">最新消息</div>
                <figcaption>經典小鎮升級3.0正式開跑　小鎮逗鎮趣 集章抽好禮</figcaption>
                <span>2021-05-03</span>
                <div>
                    為推動「小鎮漫遊」，交通部觀光局於108年配合「小鎮漫遊年」遴選40個特色小鎮，109年延續小鎮熱潮，配合「脊梁山脈旅遊年」遴選出30個經典/山城小鎮，今（110）年配合「自行車旅遊年」遴選出30個經典/自行車小鎮，邀請大家慢騎自行車小鎮，領略小鎮在地之美。交通部觀光局張錫聰局長表示，為推動小鎮漫遊年行銷主軸，今年完成百大經典小鎮的最後一塊拼圖，透過整合小鎮觀光資源，打造「百大經典小鎮護照」並辦理電子集章活動，集章點遍布各小鎮景點、借問站與特色店家
                </div>
            </div>
        </article>
        <hr>
    </main>
</body>

</html>