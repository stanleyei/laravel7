const inputs = document.querySelectorAll('input');
checkout()

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
            checkout()
        }
        else if (input === e.target.nextElementSibling) {
            if (input.value > 1) {
                input.value--;
                productPrice = priceElement.dataset.price * input.value;
                priceElement.textContent = productPrice.toLocaleString();
                checkout()
            }
        }
    });
});

inputs.forEach(input => {
    input.addEventListener('change', function () {
        if (input.value < 1) {
            input.value = 1;
        };
        const priceElement = this.parentElement.nextElementSibling;
        priceElement.textContent = (this.value * priceElement.dataset.price).toLocaleString();
        checkout()
    });
});

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
    }
    show_amount.textContent = totalQty.toLocaleString();
    show_price.textContent = `$${subPrice.toLocaleString()}`;
    shipping_cost.textContent = `$${fare}`;
    price_total.textContent = `$${totalPrice.toLocaleString()}`;
}