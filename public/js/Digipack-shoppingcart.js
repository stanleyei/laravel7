//宣告一個陣列並寫入資料
const goodsArray = [
    new objFactory("ポテト", 10.50, 0, "5566", "puipui01"),
    new objFactory("テディ", 10.50, 0, "1314", "puipui02"),
    new objFactory("シロモ", 10.50, 0, "9487", "puipui03"),
];

produceGoods();

//綁定監聽事件給"下一步"按鈕，點擊時執行跳轉
submit_order.addEventListener('click', e => {
    e.preventDefault();
    location.href = "./Digipack-shoppingcart-2.html";
});

//綁定監聽事件至按鈕父層
//判定是哪個子層按鈕"+"或"-"按鈕被觸發，點擊時改變quantity的值
display_rack.addEventListener("click", e => {
    e.preventDefault();
    const { name: productName } = e.target.parentNode.dataset;
    const { action } = e.target.dataset;
    const productObj = goodsArray.find(ga => ga.name === productName);
    if (action === "plus") {
        productObj.quantity++;
    } else if (action === "minus") {
        if (productObj.quantity > 0) {
            productObj.quantity--;
        }
    }
    produceGoods();
});

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
            <div class="d-flex justify-content-between align-items-center">
                <div class="rounded-circle"
                    style="background-image:${ga.img};background-size: cover; width: 60px; height: 60px;">
                </div>
                <div class="pl-2">
                    <h3 class="m-0 text-nowrap" style="font-size: 16px;">${ga.name}</h3>
                    <span class="text-black-50" style="font-size: 12px;">${ga.number}</span>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center flex-wrap">
                <div class="pr-sm-4" data-name="${ga.name}">
                    <button data-action="minus" class="border-0 rounded"
                        style="width: 24px; height: 24px;">-</button>
                    <input class="text-center" type="number" value="${ga.quantity}"
                        style="width: 32px; height: 24px; font-size: 14px;">
                    <button data-action="plus" class="border-0 rounded"
                        style="width: 24px; height: 24px;">+</button>
                </div>
                <div class="text-center" style="font-size: 12px; width: 70px">$${ga.price}</div>
            </div>
        </div>
        <hr>`;
    });

    //宣告運費變數
    //對goodsArray利用.map拉出每一筆資料並指定key的值進行計算後並回傳一個由計算式新組成的陣列
    //將產生的新陣列利用.reduce對陣列每一個項目進行累加後，將產生的值回傳
    let fare = 24.9;
    let result = goodsArray.reduce((a, cV) => a + (cV.price * cV.quantity), 0);
    let amount = goodsArray.reduce((a, cV) => a + cV.quantity, 0);

    //用數量來判斷是否免收運費
    if (amount === 0 || amount >= 10) {
        fare = 0;
    }

    //將各種計算結果呈現至網頁指定位置
    show_amount.textContent = amount;
    show_price.textContent = `$${result.toFixed(2)}`;
    shipping_cost.textContent = `$${fare.toFixed(2)}`;
    price_total.textContent = `$${(result + fare).toFixed(2)}`;
};