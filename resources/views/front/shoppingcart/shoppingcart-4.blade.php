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
                <div id="display_rack" class="pt-3">
                    @foreach ($cartData as $cart)
                    <div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="rounded-circle"
                                style="background-image:url({{asset($cart->attributes->img)}});background-size: cover; width: 60px; height: 60px;">
                            </div>
                            <div class="pl-2">
                                <h3 class="m-0 text-nowrap" style="font-size: 16px;">{{$cart->name}}</h3>
                                <span class="text-black-50" style="font-size: 12px;">#{{$cart->id}}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center flex-wrap">
                            <div class="mr-5">x {{$cart->quantity}} 件</div>
                            <div class="text-center single-price" style="font-size: 16px; width: 70px"
                                data-price="{{$cart->price}}">$ {{($cart->price) * ($cart->quantity)}} 元</div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
            <div>
                <span class="h4">寄送資料</span>
                <hr>
                <div class="send-ifo pt-3">
                    <div class="d-flex pb-4">
                        <div class="mr-4 col-1">姓名</div>
                        <div>{{$orders->name}}</div>
                    </div>
                    <div class="d-flex pb-4 pt-2">
                        <div class="mr-4 col-1">電話</div>
                        <div>{{$orders->phone}}</div>
                    </div>
                    <div class="d-flex pb-4 pt-2">
                        <div class="mr-4 col-1">Email</div>
                        <div>{{$orders->email}}</div>
                    </div>
                    <div class="d-flex pb-4 pt-2">
                        <div class="mr-4 col-1">地址</div>
                        <div>
                            {{$orders->zipcode}} {{$orders->county}}{{$orders->district}}{{$orders->address}}
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div>
                <div>
                    <div class="d-flex flex-column align-items-end">
                        @php
                        $fare = $cartTotalQuantity >=10 ? 0 : 60 ;
                        @endphp
                        <div class="d-flex justify-content-between" style="line-height: 28px; width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">數量:</div>
                            <div id="show_amount">{{$cartTotalQuantity}} 件</div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">小計:</div>
                            <div id="show_price">$ {{$subTotal}} 元</div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">運費:</div>
                            <div id="shipping_cost">$ {{$orders->shipping_fee}} 元</div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">總計:</div>
                            <div id="price_total">$ {{$orders->price}} 元</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end align-items-center pt-1">
                    <a href="/shoppingcart/gotoindex" >
                    <button id="submit_order" class="btn btn-primary py-2 px-5" type="button"
                        style="border-width: 2px;">返回首頁</button>
                    </a>
                </div>
        </section>
    </div>
</main>
@endsection

@section('js')

@endsection