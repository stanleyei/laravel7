<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Products;
use App\Order_status;
use App\Order_details;
use App\Shipping_status;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ToolBoxController;
use TsaiYiHua\ECPay\Services\StringService;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $cartCollection = \Cart::getContent()->sortBy('id');
        return view('front.shoppingcart.shoppingcart-1', compact('cartCollection'));
    }

    public function method()
    {
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        return view('front.shoppingcart.shoppingcart-2', compact('cartTotalQuantity', 'subTotal'));
    }

    public function information(Request $request)
    {
        Session::put('payment', $request->payment);
        Session::put('shipment', $request->shipment);
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        return view('front.shoppingcart.shoppingcart-3', compact('cartTotalQuantity', 'subTotal'));
    }

    public function finish(Request $request)
    {
        $user = Auth::user();
        $shipping_status = Shipping_status::orderBy('sort', 'asc')->first();
        $order_status = Order_status::orderBy('sort', 'asc')->first();
        $orders = Orders::create([
            'user_id' => $user->id,
            'order_id' => 'OD' . time() . rand(1, 99),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'price' => 9999999,
            'pay_type' => Session::get('payment'),
            'shipping' => Session::get('shipment'),
            'shipping_fee' => 9999999,
            'shipping_status_id' => $shipping_status->id,
            'order_status_id' => $order_status->id,
            'remark' => '',
        ]);

        $totalPrice = 0;
        $cartData = \Cart::getContent()->sortBy('id');
        //設個items給金流用
        $items = [];
        foreach ($cartData as $data) {
            $productId = $data->id;
            $product = Products::find($productId);
            $totalPrice += $data->quantity * $product->price;
            Order_details::with('products')->create([
                'order_id' => $orders->id,
                'products_id' => $product->id,
                'quantity' => $data->quantity,
                'old' => $data->tojson(),
            ]);

            $new_ary = [
                'name' => $product->name,
                'qty' => $data->quantity,
                'price' => $product->price,
                'unit' => '個'
            ];
            array_push($items, $new_ary);
        };

        $fee = \Cart::getTotalQuantity() >= 10 ? 0 : 60;
        $orders->update([
            'price' => $totalPrice + $fee,
            'shipping_fee' => $fee,
        ]);


        //第三方支付
        $formData = [
            'UserId' => $orders->user_id, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $items,
            'OrderId' => $orders->order_id,
            'TotalAmount' => $orders->price,
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];

        // return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();

        $cartTotalQuantity = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        return view('front.shoppingcart.shoppingcart-4', compact('orders','cartData','cartTotalQuantity','subTotal'));
    }

    public function gotoindex()
    {
        \Cart::clear();
        return view('front.index');
    }

    public function add(Request $request)
    {
        //拿接收到的$request去與資料庫比對，如果有才存入購物車，沒有則回傳fail
        $prductsData = Products::find($request->id);
        if ($prductsData) {
            \Cart::add(array(
                'id' => $prductsData->id,
                'name' => $prductsData->name,
                'price' => $prductsData->price,
                'quantity' => 1,
                'attributes' => array(
                    'img' => $prductsData->img,
                ),
            ));
            return 'success';
        } else {
            return 'fail';
        }
    }

    public function update(Request $request)
    {
        if ($request->id) {
            \Cart::update($request->id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            ));
        }
        $newQuantity = \Cart::get($request->id)->quantity;
        return $newQuantity;
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            \Cart::remove($request->id);
            return 'success';
        } else {
            return 'fail';
        }
    }

    public function notifyUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    public function returnUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {

                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                //目前是顯示所有資料將其DD出來
                dd($this->checkoutResponse->collectResponse($serverPost));
            }
        }
    }

    public function __construct(Checkout $checkout, CheckoutResponseCollection $checkoutResponse)
    {
        $this->checkout = $checkout;
        $this->checkoutResponse = $checkoutResponse;
    }
}
