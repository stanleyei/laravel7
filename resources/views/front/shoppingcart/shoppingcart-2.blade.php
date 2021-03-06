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
                    <div class="progress-bar" role="progressbar" style="width: 30%;background-color: #6EE7B7;"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="rounded-circle text-center"
                    style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">3</div>
                <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div class="rounded-circle text-center"
                    style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">4</div>
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
            <form action="/shoppingcart/information" method="POST">
                @csrf
                <div>
                    <div>
                        @php
                            $payment = Session::get('payment');
                        @endphp
                        <h2 class="h4 pb-3">付款方式</h2>
                        <label class="pl-5" style="font-size: 20px;"><input type="radio" name="payment" id="" value="cridit" @if ($payment == 'cridit') checked @endif required> 信用卡付款
                        </label>
                        <hr>
                        <label class="pl-5" style="font-size: 20px;"><input type="radio" name="payment" id="" value="atm"  @if ($payment == 'atm') checked @endif required> 網路 ATM
                        </label>
                        <hr>
                        <label class="pl-5" style="font-size: 20px;"><input type="radio" name="payment" id="" value="cvs"   @if ($payment == 'cvs') checked @endif required> 超商代碼
                        </label>
                    </div>
                    <hr>
                    <div>
                        @php
                            $shipment = Session::get('shipment');
                        @endphp
                        <h2 class="h4 pb-3">運送方式</h2>
                        <label class="pl-5" style="font-size: 20px;"><input type="radio" name="shipment" id="" value="home" @if ($shipment == 'home') checked @endif required>
                            黑貓宅配</label>
                        <hr>
                        <label class="pl-5" style="font-size: 20px;"><input type="radio" name="shipment" id="" value="store" @if ($shipment == 'store') checked @endif required>
                            超商店到店</label>
                    <div>
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
                        data-action="prev" title="回到上一步">上一步</button>
                    <button class="btn btn-primary py-2 px-5" type="submit" style="border-width: 2px;"
                        data-action="next" title="前往下一步">下一步</button>
                </div>
            </form>
        </section>
    </div>
</main>
@endsection

@section('js')
<script>
    btn_box.addEventListener('click', e => {
        if(e.target.dataset.action === "prev"){
            location.href = "/shoppingcart"
        };
    });
</script>
@endsection