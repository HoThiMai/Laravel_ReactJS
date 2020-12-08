<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailCheckout;
use App\Http\Requests\OrderRequest;
use App\Cart;
use App\Color;
use App\Size;
use App\OrderMail;
use App\Bill;
use App\BillDetail;
use App\Customer;
use App\Product;
use DB;
use Session;
use Carbon\Carbon;
use App\SizeProduct;
class CartController extends Controller
{
    //
    public function getCart()
    {
        $id_Cus = Session::get('login');
        $carts = Session('cart') ? Session::get('cart') : [];
        $carts = $this->getCartOfUser($carts, $id_Cus);
        if (Session::has('cart') && count($carts) > 0) {
            if (!Session('login')) {
                echo ('<script>alert("Ban can dang nhap");</script>');
                return redirect()->back();
            } else {
                $products = [];
                $sizes = [];
                $totalPrice = 0;
                for ($i = 0; $i < count($carts); $i++) {
                    // query
                    //select `product_sizes`.`id_pro`, `product_sizes`.`id_size`, `sizes`.`name` 
                    //from `product_sizes` ,`sizes` where 
                    //`product_sizes`.`id_pro` = 1 and `product_sizes`.`id_size` = `sizes`.`id`
                    $size = DB::table('product_sizes')
                        ->select([
                            'product_sizes.id_pro', 'product_sizes.id_size',
                            'sizes.name'
                        ])
                        ->join('sizes', 'product_sizes.id_size', '=', 'sizes.id')
                        ->where('product_sizes.id_pro', '=', intval($carts[$i]->id_Pro))
                        ->get();
                    $product = Product::find($carts[$i]->id_Pro);
                    if ($product) {
                        $product->quantity = $carts[$i]->quantity;
                        $totalPrice += ($product->promotion_price != 0) ? $product->promotion_price * $product->quantity : $product->unit_price * $product->quantity;
                        array_push($products, $product);
                    }
                    if ($size) {
                        array_push($sizes, $size);
                    }
                }
                // echo (json_encode($sizes));
                return view('page.cart')->with(['products' => $products, 'sizes' => $sizes, 'totalPrice' => $totalPrice, 'carts' => $carts]);
            }
        } else {
            Session::flash('alert-danger', 'Cart have no products');
            return redirect()->back();
        }
    }
    public function saveSizeRental(Request $request, $id)
    {
        $id_Cus = Session::get('login');
        $carts = Session('cart') ? Session::get('cart') : [];
        for ($i = 0; $i < count($carts); $i++) {
            if ($carts[$i]->id_Cus == $id_Cus && $id == $carts[$i]->id_Pro) {
                $carts[$i]->id_size = $request->sizes;
                $carts[$i]->rental_time = $request->days;
                break;
            }
        }
        Session::put('cart', $carts);
        Session::flash('alert-success', 'Save successfully');
        return  redirect()->back();
    }
    public function removeCart($id)
    {
        $id_Cus = Session::get('login');
        $carts = Session('cart') ? Session::get('cart') : [];
        for ($i = 0; $i < count($carts); $i++) {
            if ($carts[$i]->id_Cus == $id_Cus && $id == $carts[$i]->id_Pro) {
                array_splice($carts, $i, 1);
                //  break;
            }
        }
        Session::put('cart', $carts);
        if (count(Session::get('cart')) > 0) {
            Session::flash('alert-success', 'Removed a product successful!');
            return redirect()->back();
        } else {
            return  redirect('index');
        }
    }
    function checkExist($carts, $id_Cus, $id_Pro, $status)
    {
        for ($i = 0; $i < count($carts); $i++) {
            if ($carts[$i]->id_Cus == $id_Cus && $carts[$i]->id_Pro == $id_Pro) {
                if($status == "add"){
                    $product= Product::find($carts[$i]->id_Pro);
                    if ($carts[$i]->quantity == $product->quantity) {
                        Session::flash('alert-success', 'Sold out');
                    }else{
                         $carts[$i]->quantity++;
                        }
                }else{
                    if ($carts[$i]->quantity == 1) {
                        array_splice($carts, $i, 1);
                    }else{
                        $carts[$i]->quantity--;
                        }
                }
                return $carts;
            }
        }
        return null;
    }
    public function addCart($id)
    {
        if (!Session('login')) {
            echo ('<script>alert("Ban can dang nhap");</script>');
        } else {
            $carts = Session('cart') ? Session::get('cart') : [];
            $check = $this->checkExist($carts, Session::get('login'), $id, "add");
            if (!$check) {
                array_push($carts, new Cart(Session::get('login'), $id, 1, 2));
            } else {
                $carts = $check;
            }
            Session::put('cart', $carts);
            // $products = Product::find($id);
            // return view('page.cart');
            // echo ('<script>alert("Added a product");</script>');
        }
        return redirect()->back();
    }
    public function addQuantity($id)
    {
        if (!Session('login')) {
            echo ('<script>alert("Ban can dang nhap");</script>');
        } else {
            $carts = Session('cart') ? Session::get('cart') : [];
            $carts = $this->checkExist($carts, Session::get('login'), $id, "add");
            Session::put('cart', $carts);
        }
        return redirect()->back();
    }
    public function minusQuantity($id)
    {
        if (!Session('login')) {
            echo ('<script>alert("Ban can dang nhap");</script>');
        } else {
            $carts = Session('cart') ? Session::get('cart') : [];
            $carts = $this->checkExist($carts, Session::get('login'), $id, "minus");
            Session::put('cart', $carts);
        }
        if(count($this->getCartOfUser($carts, Session::get('login'))) > 0){
            return redirect()->back();
        }else{
            Session::flash('alert-info', 'You have just removed your last product');
            return redirect('index');
        }
        
    }
    public function checkout(OrderRequest $Request)
    {
        $carts = Session('cart') ? Session::get('cart') : [];
        $id_Cus = Session::get('login');
        $carts = $this->getCartOfUser($carts, $id_Cus);
        if (count($carts) > 0) {
            $orderMail=[];
            $cus = new Customer();
            $cus->name = $Request->name;
            $cus->phone_number = $Request->phone;
            $cus->email = $Request->email;
            $cus->gender = $Request->gender;
            $cus->address = $Request->address;
            $cus->note = $Request->note;
            $cus->save();
            $bill = new Bill();
            $bill->id_cus = $cus->id;
            $dt = Carbon::now();
            $bill->date = $dt->toDateString();
            $bill->total_price = $Request->totalPrice;
            $bill->payment = $Request->payment;
            $bill->note = $Request->note;
            $bill->save();
            foreach ($carts as $cart) {
                $bill_detail = new BillDetail();
                $bill_detail->quantity_pro = $cart->quantity;
                $bill_detail->id_bill = $bill->id;
                $bill_detail->rental_time = $cart->rental_time;
                $bill_detail->id_pro = $cart->id_Pro;
                if($cart->id_size==0){
                    $getFirstSizeOfProduct = SizeProduct::where('id_pro',$cart->id_Pro)->first();
                    $cart->id_size= $getFirstSizeOfProduct->id_size;
                }
                $bill_detail->id_size= $cart->id_size;
                $bill_detail->save();
                $product= Product::find($bill_detail->id_pro);
                $color = Color::find($product->id_color);
                $size= Size::find($cart->id_size);
                echo $size;
                array_push($orderMail, new OrderMail($product->name, ($product->promotion_price)?$product->promotion_price:$product->unit_price, $cart->quantity,$color->name, $size->name));
            }
            \Mail::to($cus->email)->send(new EmailCheckout($orderMail,$cus->name,$bill->total_price));
            Session::put('cart', $this->removeCartOfUser($carts, $id_Cus));
            Session::flash('alert-success', $Request->name.' đã chốt đơn.');
            return redirect()->route('trangchu');
        } else {
            return redirect()->route('trangchu');
        }
    }
    public function getCartOfUser($carts, $id_Cus)
    {
        $arr = [];
        foreach ($carts as $cart) {
            if ($cart->id_Cus == $id_Cus) {
                array_push($arr, $cart);
            }
        }
        return $arr;
    }
    public function removeCartOfUser($carts, $id_Cus)
    {
        $arr = [];
        foreach ($carts as $cart) {
            if ($cart->id_Cus != $id_Cus) {
                array_push($arr, $cart);
            }
        }
        return $arr;
    }
}
