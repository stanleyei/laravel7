@extends('layouts.template')

@section('css')
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


    input:focus {
        border: 2px black solid !important;
    }

    @media (max-width:768px) {
        #nav-logo {
            width: 45px;
            height: 30px;
        }
    }
</style>
@endsection

@section('main')
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
                    <div class="progress-bar" role="progressbar" style="width: 30%;background-color: #6EE7B7;"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="rounded-circle text-center"
                    style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">4</div>
            </div>
            <div id="process-text" class="d-flex justify-content-between px-2">
                <div class="pt-2 pl-lg-2">確認購物車</div>
                <div class="pt-2 pr-sm-3">付款與運送方式</div>
                <div class="pt-2 mr-sm-4">填寫資料</div>
                <div class="pt-2 pr-sm-2">完成訂購</div>
            </div>
        </section>
        <hr>
        <section>
            <form action="/shoppingcart/finish" method="POST">
                @csrf
                <h2 class="h4">寄送資料</h2>
                <div>
                    <div class="form-group">
                        <label for="inputEmail4">姓名</label>
                        <input type="text" class="form-control shadow-none" placeholder="請輸入您的大名" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">電話</label>
                        <input type="tel" class="form-control shadow-none" placeholder="請輸入您的聯絡電話" name="phone"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Email</label>
                        <input type="email" class="form-control shadow-none" placeholder="請輸入您的E-mail" name="email"
                            required>
                    </div>
                    <div class="form-row pb-4">
                        <div class="form-group col-md-12">
                            <label for="inputCity">地址</label>
                            <div class="city-selector-set d-flex">
                                <!-- 縣市選單 -->
                                <select class="county form-control shadow-none col-5" name="county" required></select>
                                <!-- 區域選單 -->
                                <div class="col-5">
                                    <select class="district form-control shadow-none" name="district" required></select>
                                </div>
                                <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                                <input class="zipcode form-control text-center" type="text" size="7" name="zipcode"
                                    readonly placeholder="郵遞區號">
                            </div>
                        </div>
                        <div class="form-row col-12 m-0">
                            <input type="text" class="form-control shadow-none" id="inputCity" placeholder="地址"
                                name="address" required>
                        </div>
                    </div>
                    <hr>
                </div>
                <div>
                    <div class="d-flex flex-column align-items-end">
                        @php
                        $fare = $cartTotalQuantity >=10 ? 0 : 60 ;
                        @endphp
                        <div class="d-flex justify-content-between" style="line-height: 28px; width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">數量:</div>
                            <div>{{$cartTotalQuantity}} 件</div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">小計:</div>
                            <div>$ {{$subTotal}} 元</div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">運費:</div>
                            <div>$ {{$fare}} 元</div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">總計:</div>
                            <div>$ {{$subTotal + $fare}} 元</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="btn_box" class="d-flex justify-content-between align-items-center pt-1">
                    <button class="btn btn btn-outline-primary py-2 px-5" type="button" style="border-width: 2px;"
                        data-action="prev">上一步</button>
                    <button class="btn btn-primary py-2 px-5" type="submit" style="border-width: 2px;"
                        data-action="next">前往付款</button>
                </div>
            </form>
        </section>
    </div>
</main>
@endsection

@section('js')
<script src="{{asset('/js/tw-city-selector.min.js')}}"></script>
<script>
    btn_box.addEventListener('click', e => {
        if(e.target.dataset.action === "prev"){
            location.href = "/shoppingcart/method"
        };
    });

    new TwCitySelector({
        el: '.city-selector-set',
        elCounty: '.county', // 在 el 裡查找 element
        elDistrict: '.district', // 在 el 裡查找 element
        elZipcode: '.zipcode' // 在 el 裡查找 element
    });
</script>
@endsection