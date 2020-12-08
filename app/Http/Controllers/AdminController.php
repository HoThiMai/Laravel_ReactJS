<?php

namespace App\Http\Controllers;
use App\Product;
use App\TypeProduct;
use App\Bill;
use App\BillDetail;
use App\Color;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndexAdmin(){
        $product = Product::all();
        $type_products =TypeProduct::all(); 
        $color_products=Color::all(); 
        return view('PageAdmin.trangchuAdmin',compact('product','type_products','color_products'));
    } 
    public function getOrder(){
        $order = Bill::all();
        $customers=Customer::all(); 
        return view('PageAdmin.orderManagement',compact('order','customers'));
    }
    public function getDailyChart(Request $req){
        $date=Carbon::now();
        $product = Product::all();
        $order = Bill::all();
        $orderDetails=BillDetail::all(); 
      
        $total_quantity = BillDetail::
        join('products', BillDetail::raw('id_pro'),'=','products.id')
        ->join('bills', BillDetail::raw('id_bill'), '=', 'bills.id')   
        ->groupBy('id_pro',Product::raw('name'))  
        ->select(Product::raw('name'),BillDetail::raw('SUM(quantity_pro) as total_quantity'))
        ->Where(Bill::raw('date'),'=',$date)->get();
        return view('PageAdmin.statisticDaily',compact('date','total_quantity'));
    }
    public function postDailyChart(Request $req){
        $date=$req->input('date');
        $product = Product::all();
        $order = Bill::all();
        $orderDetails=BillDetail::all(); 
      
        $total_quantity = BillDetail::
        join('products', BillDetail::raw('id_pro'),'=','products.id')
        ->join('bills', BillDetail::raw('id_bill'), '=', 'bills.id')   
        ->groupBy('id_pro',Product::raw('name'))  
        ->select(Product::raw('name'),BillDetail::raw('SUM(quantity_pro) as total_quantity'))
        ->Where(Bill::raw('date'),'=',$date)->get();
        return view('PageAdmin.statisticDaily',compact('date','total_quantity'));
    }
    
    public function getMonthlyChart(){
        $order = Bill::all(); 
        $orderDetails=BillDetail::all();
        $pro_month=BillDetail::
        join('bills', BillDetail::raw('id_bill'), '=', 'bills.id')
        ->select(Bill::raw('MONTH(date) as month'),BillDetail::raw('SUM(quantity_pro) as sum'))
        ->groupBy('month')->get();   
        return view('PageAdmin.statisticMonthly',compact('pro_month'));
    } 
    
    //**************Add Product*******************************/
    public function insert(){
    	return view('PageAdmin.addProduct');
    }
    public function insertProduct(Request $request)
    {
        $products = new Product;
        $products->name =  $request->input('tensanpham');
        $products->description = $request->input('mota');
        $products->unit_price = $request->input('gia');
        $products->promotion_price = null;
        if ($request->hasFile('hinhanh')){
            $file=$request->file('hinhanh');
            $fileName=$file->getClientOriginalName('hinhanh');
            $file->move('Image/product',$fileName);
        }
        if($request->file('hinhanh')!=null){
            $products->image=$fileName;
        }else{
            $products->image="1.jpg";
        }
        $products->new = 1;
        $products->id_type = $request->input('loai');
        $products->id_color = $request->input('mausac');
        $products->save();
        return redirect()->route('trangchuAdmin');
    }
    //**************Edit Product*******************************/
    public function editPro ($id)
    {
        $product = Product::find($id);
        return view('PageAdmin.editProduct', compact('product'));
    }
   public function editProduct(Request $request, $id)
   {
        $products = Product::find($id);
        $products->name =  $request->input('tensanpham');
        $products->description = $request->input('mota');
        if($products->unit_price!=$request->input('gia')){
            $products->promotion_price = $request->input('gia');
        }else{
            $products->unit_price = $request->input('gia');
        }
        if ($request->hasFile('hinhanh')){
            $file=$request->file('hinhanh');
            $fileName=$file->getClientOriginalName('hinhanh');
            $file->move('Image/product',$fileName);
        }
        if($request->file('hinhanh')!=null){
            $products->image=$fileName;
        }
        $products->new = 1;
        $products->id_type = $request->input('loai');
        $products->id_color = $request->input('mausac');
    	$products->save();
    	return redirect()->route('trangchuAdmin');
   }
   //***************Delete product****************************/
   public function deleteProduct($id)
   {
       $product = Product::find($id);
       $product->delete();
       return redirect()->route('trangchuAdmin');
   }
   //***************ViewDetail*******************************/
   public function viewDetail($id){
    $orders=Bill::find($id);
    $products=Product::all();
    $customers=Customer::all();
    $orderDetails=BillDetail::all();
    return view('PageAdmin.orderDetail', compact('products','customers','orders','orderDetails'));
}
}

