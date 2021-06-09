const inputs = document.querySelectorAll('input');
let priceArray;
let fare = 24.9;

submit_order.addEventListener('click', e => {
    e.preventDefault();
    location.href = "/shoppingcart/method";
});

display_rack.addEventListener("click", function (e) {
    e.preventDefault();
    const priceElement = e.target.parentElement.nextElementSibling;
    inputs.forEach(input => {
        if (input === e.target.previousElementSibling) {
            input.value++;
            productPrice = priceElement.dataset.price * input.value;
            priceElement.textContent = productPrice.toLocaleString();
        }
        else if (input === e.target.nextElementSibling) {
            if (input.value > 1) {
                input.value--;
                productPrice = priceElement.dataset.price * input.value;
                priceElement.textContent = productPrice.toLocaleString();
            }
        }
    });
});

inputs.forEach(input => {
    input.addEventListener('change', function () {
        if(input.value < 1){
            input.value = 1;
        };
        const priceElement = this.parentElement.nextElementSibling;
        priceElement.textContent = this.value * priceElement.dataset.price;
    });
});



shipping_cost.textContent = `$${fare.toFixed(2)}`;


// let amount = inputs.reduce((a, cV) => a + cV.value, 0);

function produceGoods() {
    let fare = 24.9;
    let result = goodsArray.reduce((a, cV) => a + (cV.price * cV.quantity), 0);
    let amount = goodsArray.reduce((a, cV) => a + cV.quantity, 0);

    用數量來判斷是否免收運費
    if (amount === 0 || amount >= 10) {
        fare = 0;
    }

    show_amount.textContent = amount;
    show_price.textContent = `$${result.toFixed(2)}`;
    shipping_cost.textContent = `$${fare.toFixed(2)}`;
    price_total.textContent = `$${(result + fare).toFixed(2)}`;
};