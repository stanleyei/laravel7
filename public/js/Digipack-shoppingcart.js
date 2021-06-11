const token = document.querySelector('[name="csrf-token"]').getAttribute('content');
const inputs = document.querySelectorAll('input');
checkout();

//增加減少商品數量的點擊事件
display_rack.addEventListener("click", function (e) {
    e.preventDefault();
    const priceElement = e.target.parentElement.nextElementSibling;
    inputs.forEach(input => {
        if (input === e.target.previousElementSibling) {
            input.value = input.value * 1 + 1;
            update(input, priceElement);
        }
        else if (input === e.target.nextElementSibling) {
            if (input.value > 1) {
                input.value = input.value * 1 - 1;
                update(input, priceElement);
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
        const productId = input.dataset.id;
        const formData = new FormData;  
        formData.append('id', productId);
        formData.append('quantity', input.value);
        formData.append('_token', token);
        fetch('/shoppingcart/update', {
                method: 'POST',
                body: formData,
        })
        .then(response => {
            return response.text();
        })
        .then(result => {
            input.value = result;
            const priceElement = this.parentElement.nextElementSibling;
            priceElement.textContent = (this.value * priceElement.dataset.price).toLocaleString();
            checkout();
        });
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
                formData.append('_token', token);
                fetch('/shoppingcart/delete', {
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
                        checkout();
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
        totalQty === 0 || totalQty >= 10
        if (totalQty === 0 || totalQty >= 10) {
            fare = 0;
            totalPrice = subPrice + fare;
        }else{
            totalPrice = subPrice + fare;
        }
    });
    show_amount.textContent = `${totalQty.toLocaleString()} 件`;
    show_price.textContent = `$ ${subPrice.toLocaleString()} 元`;
    shipping_cost.textContent = `$ ${fare} 元`;
    price_total.textContent = `$ ${totalPrice.toLocaleString()} 元`;
}

//每次點擊增加減少發送Fetch的函式
function update(input, priceElement) {
    const productId = input.dataset.id;
    const formData = new FormData;  
    formData.append('id', productId);
    formData.append('quantity', input.value);
    formData.append('_token', token);
    fetch('/shoppingcart/update', {
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