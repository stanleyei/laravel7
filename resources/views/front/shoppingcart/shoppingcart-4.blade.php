<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digipack-shoppingcart-4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
        }

        #nav {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
            justify-content: space-between;
        }

        #nav-logo {
            width: 6.625rem;
            height: 3.75rem;
        }

        .send-ifo {
            font-size: 20px;
        }

        @media (max-width:768px) {
            #nav-logo {
                width: 45px;
                height: 30px;
            }

            .send-ifo {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <header class="pt-md-2 mb-1 bd-mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="nav">
            <a class="navbar-brand" href="#"><img src="./image/logo.svg" alt="" id="nav-logo"></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span>
                    <img src="./image/svgexport-2.svg" alt="">
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link mr-2 text-center" href="#">Blog<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body ml-md-4 text-center" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body mx-md-4 text-center" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body ml-md-3 text-center" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown mx-md-3 d-flex justify-content-center">
                        <div class="nav-item mr-3">
                            <a class="nav-link text-body ml-md-3" href="#"><i
                                    class="fas fa-shopping-cart fa-2x"></i></a>
                        </div>
                        <a class="nav-link text-body" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x"></i>
                        </a>
                        <div id="dropdown" class="dropdown-menu dropdown-menu-right position-absolute"
                            style="width: 100%;" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./Digipack-login.html">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="py-5 px-3 " style="width: 100%; background-color: #D1D5DB;">
        <div class="container bg-light rounded py-5 px-5">
            <h1 class="h3 font-weight-bold">購物車</h1>
            <section class="pt-3">
                <div class="d-flex justify-content-around position-relative align-items-center">
                    <div class="rounded-circle text-center text-white"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">1</div>
                    <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #6EE7B7;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="rounded-circle text-center text-white"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">2</div>
                    <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #6EE7B7;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="rounded-circle text-center text-white"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">3</div>
                    <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #6EE7B7;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="rounded-circle text-center text-white"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">4</div>
                </div>
                <div id="process-text" class="d-flex justify-content-between px-2">
                    <div class="pt-2 pl-sm-2">確認購物車</div>
                    <div class="pt-2 pr-sm-3">付款與運送方式</div>
                    <div class="pt-2 mr-sm-4">填寫資料</div>
                    <div class="pt-2 pr-sm-2">完成訂購</div>
                </div>
            </section>
            <hr>
            <section>
                <h2 class="text-center font-weight-bold" style="font-size: 48px;">訂單成立</h2>
                <div class="pb-4">
                    <span class="h4">訂單明細</span>
                    <div id="display_rack" class="pt-3"></div>
                </div>
                <div>
                    <span class="h4">寄送資料</span>
                    <div class="send-ifo pt-5">
                        <div class="d-flex pb-4">
                            <div class="mr-4">姓名</div>
                            <div>蒙其 ‧ D ‧ 魯夫</div>
                        </div>
                        <div class="d-flex pb-4 pt-2">
                            <div class="mr-4">電話</div>
                            <div>0988556117</div>
                        </div>
                        <div class="d-flex pb-4 pt-2">
                            <div class="mr-4">Email</div>
                            <div>onepiece@gmail.com</div>
                        </div>
                        <div class="d-flex pb-4 pt-2">
                            <div class="mr-4">地址</div>
                            <div>東海藍佛夏村</div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div>
                    <div>
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex justify-content-between" style="line-height: 28px; width: 236px;">
                                <div class="text-black-50" style="font-size: 14px;">數量:</div>
                                <div>3</div>
                            </div>
                            <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                                <div class="text-black-50" style="font-size: 14px;">小計:</div>
                                <div>$24.90</div>
                            </div>
                            <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                                <div class="text-black-50" style="font-size: 14px;">運費:</div>
                                <div>$24.90</div>
                            </div>
                            <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                                <div class="text-black-50" style="font-size: 14px;">總計:</div>
                                <div>$24.90</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end align-items-center pt-1">
                        <a href="./Digipack-index.html">
                            <button id="submit_order" class="btn btn-primary py-2 px-5" type="button"
                                style="border-width: 2px;">返回首頁</button>
                        </a>
                    </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="row mr-0 py-md-5 mb-5 px-5 justify-content-between align-items-center d-flex">
            <div class="text-center text-md-left col col-md-3 col-lg-2 pb-4">
                <img src="./image/svgexport-20.svg" alt="">
                <span class="h5 pl-2">數位方塊</span>
                <p class="pt-2 text-muted"><small>Air plant banjo lyft occupy retro adaptogen indego</small></p>
            </div>
            <div class="d-md-flex col-sm-8 col-md-9 col-lg-10 justify-content-around">
                <div class="col-md-5 d-sm-flex text-center text-md-right">
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                </div>
                <div class="col-md-5 d-sm-flex text-center text-md-left">
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light d-md-flex py-3 px-5 justify-content-between text-center align-items-center">
            <div><small>© 2020 Tailblocks — @knyttneve</small></div>
            <div class="d-flex align-items-center justify-content-center">
                <img src="./image/svgexport-21.svg" alt="" class="px-1">
                <img src="./image/svgexport-22.svg" alt="" class="px-1">
                <img src="./image/svgexport-23.svg" alt="" class="px-1">
                <div class="pt-1">
                    <i class="fab fa-linkedin-in px-2 text-secondary" style="font-size: 24px; "></i>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <script>

        submit_order.addEventListener('click', e => {
            e.preventDefault();
            location.href = "./Digipack-index.html";
        });

        //宣告一個陣列並寫入資料
        const goodsArray = [
            new objFactory("ポテト", 10.50, 1, "5566", "puipui01"),
            new objFactory("テディ", 10.50, 1, "1314", "puipui02"),
            new objFactory("シロモ", 10.50, 1, "9487", "puipui03"),
        ];

        produceGoods();

        //產生新物件的工廠函式
        function objFactory(name, price, quantity, number, img) {
            this.name = name;
            this.price = price;
            this.quantity = quantity;
            this.number = `#${number}`;
            this.img = `url(./image/${img}.jpg)`;
        };

        function produceGoods() {

            //清空頁面
            display_rack.innerHTML = '';

            //對goodsArray陣列跑forEach迴圈產生商品至頁面
            goodsArray.forEach(ga => {
                display_rack.innerHTML +=
                    `<div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-between align-items-center pb-2">
                            <div class="rounded-circle"
                                style="background-image: ${ga.img};background-size: cover; width: 60px; height: 60px;">
                            </div>
                            <div class="pl-2">
                                <h3 class="m-0" style="font-size: 16px;">${ga.name}</h3>
                                <span class="text-black-50" style="font-size: 12px;">${ga.number}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="pr-4" style="font-size: 14px;">x ${ga.quantity}</div>
                            <div style="font-size: 12px;">$${(ga.price).toFixed(2)}</div>
                        </div>
                    </div>
                    <hr>`;
            });
        };
    </script>
</body>

</html>