@extends('layouts.template')

@section('css')
<style>
    body {
        font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
        transition: all 1s ease-in-out;
        margin: 0;
        padding: 0;
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

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    @media (max-width:768px) {
        #nav-logo {
            width: 45px;
            height: 30px;
        }

        #process-text {
            font-size: 12px;
        }
    }
</style>
@endsection

@section('main')
<main class="mb-5 py-5 px-3 " style="width: 100%; background-color: #D1D5DB;">
    <div class="container bg-light rounded py-5 px-sm-5">
        <h1 class="h3 font-weight-bold">購物車</h1>
        <section class="pt-3">
            <div class="d-flex justify-content-around position-relative align-items-center">
                <div class="rounded-circle text-center text-white"
                    style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">1</div>
                <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                    <div class="progress-bar" role="progressbar" style="width: 35%;background-color: #6EE7B7;"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="rounded-circle text-center"
                    style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">2</div>
                <div class="progress" style="width: 12%;max-width: 180px; height: 8px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100"></div>
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
                <div class="pt-2">確認購物車</div>
                <div class="pt-2 pr-sm-3">付款與運送方式</div>
                <div class="pt-2 mr-sm-4">填寫資料</div>
                <div class="pt-2 pr-sm-2">完成訂購</div>
            </div>
        </section>
        <hr>
        <section>
            <form>
                <div>
                    <h2 class="h4 pt-2 pb-5">訂單明細</h2>
                    <div id="display_rack">
                        @foreach ($cartCollection as $cart)
                        <div class="d-flex justify-content-between">
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="delete-btns btn-danger rounded-circle mr-4" style="font-size: 14px;"
                                    data-delete="{{$cart->id}}">X</button>
                                <div class="rounded-circle"
                                    style="background-image:url({{asset($cart->attributes->img)}});background-size: cover; width: 60px; height: 60px;">
                                </div>
                                <div class="pl-2">
                                    <h3 class="m-0 text-nowrap" style="font-size: 16px;">{{$cart->name}}</h3>
                                    <span class="text-black-50" style="font-size: 12px;">#{{$cart->id}}</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center flex-wrap">
                                <div class="pr-sm-4" data-name="{{$cart->name}}">
                                    <button data-action="minus" class="border-0 rounded"
                                        style="width: 24px; height: 24px;">-</button>
                                    <input class="text-center" type="number" value="{{$cart->quantity}}"
                                        style="width: 32px; height: 24px; font-size: 14px;" data-id="{{$cart->id}}">
                                    <button data-action="plus" class="border-0 rounded"
                                        style="width: 24px; height: 24px;">+</button>
                                </div>
                                <div class="text-center single-price" style="font-size: 12px; width: 70px"
                                    data-price="{{$cart->price}}">{{($cart->price) * ($cart->quantity)}}</div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex justify-content-between" style="line-height: 28px; width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">數量:</div>
                            <div id="show_amount"></div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">小計:</div>
                            <div id="show_price"></div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">運費:</div>
                            <div id="shipping_cost"></div>
                        </div>
                        <div class="d-flex justify-content-between" style="line-height: 28px;  width: 236px;">
                            <div class="text-black-50" style="font-size: 14px;">總計:</div>
                            <div id="price_total"></div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center pt-1">
                    <span><i class="far fa-arrow-left"></i> 返回購物</span>
                    <a href="./Digipack-shoppingcart-2.html">
                        <button id="submit_order" class="btn btn-primary py-2 px-5" type="submit"
                            style="border-width: 2px;">下一步</button>
                    </a>
                </div>
            </form>
        </section>
    </div>
</main>
@endsection

@section('js')
<script>
const inputs = document.querySelectorAll('input');
checkout();

//增加減少商品數量的點擊事件
display_rack.addEventListener("click", function (e) {
    e.preventDefault();
    const priceElement = e.target.parentElement.nextElementSibling;
    inputs.forEach(input => {
        if (input === e.target.previousElementSibling) {
            update(1, input, priceElement);
        }
        else if (input === e.target.nextElementSibling) {
            if (input.value > 1) {
                update(-1, input, priceElement);
            };
        };
    });
});

//直接更改input內數字的事件
inputs.forEach(input => {
    input.addEventListener('change', function () {
        if (input.value < 1) {
            input.value = 1;
        };
        const priceElement = this.parentElement.nextElementSibling;
        priceElement.textContent = (this.value * priceElement.dataset.price).toLocaleString();
        checkout();
    });
});

//刪除購物車商品
document.querySelectorAll('.delete-btns').forEach(delBtns => {
    delBtns.addEventListener('click', function () {
        Swal.fire({
            title: '確定要移出購物車嗎?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        })
        .then((result) => {
            if (result.isConfirmed) {
                const delId = this.dataset.delete;
                const formData = new FormData;
                formData.append('id', delId);
                formData.append('_token', '{{ csrf_token() }}');
                fetch('{{route("shoppingcartDelete")}}', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => {
                    return response.text();
                })
                .then(result => {
                    if (result === 'success') {
                        this.parentElement.parentElement.nextElementSibling.remove();
                        this.parentElement.parentElement.remove();
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: '已移出購物車',
                            showConfirmButton: false,
                            timer: 800
                        });
                    }
                    else {
                        Swal.fire({
                            icon: 'error',
                            text: '哇!!請再試一次!!',
                        });
                    };
                });
            };
        });
    });
});

//跳轉下一頁
submit_order.addEventListener('click', e => {
    e.preventDefault();
    location.href = "/shoppingcart/method";
});

//計算總結的函式
function checkout() {
    let totalQty = 0;
    let subPrice = 0;
    let fare = 60;
    let totalPrice = 0;
    inputs.forEach(input => {
        const price = Number(input.parentElement.nextElementSibling.textContent);
        totalQty += Number(input.value);
        subPrice += price;
        totalPrice = subPrice + fare;
    });
    if (totalQty === 0 || totalQty >= 10) {
        fare = 0;
    };
    show_amount.textContent = totalQty.toLocaleString();
    show_price.textContent = `$${subPrice.toLocaleString()}`;
    shipping_cost.textContent = `$${fare}`;
    price_total.textContent = `$${totalPrice.toLocaleString()}`;
}

//每次點擊增加減少發送Fetch的函式
function update(number, input, priceElement) {
    input.value = number;
    const productId = input.dataset.id;
    const formData = new FormData;  
    formData.append('id', productId);
    formData.append('quantity', input.value);
    formData.append('_token', '{{ csrf_token() }}');
    fetch('{{route("shoppingcartUpdate")}}', {
            method: 'POST',
            body: formData,
    })
    .then(response => {
        return response.text();
    })
    .then(result => {
        input.value = result;
        productPrice = priceElement.dataset.price * input.value;
        priceElement.textContent = productPrice.toLocaleString();
        checkout();
    });
}

</script>
@endsection