<?php

namespace App\Http\Controllers;
use App\Mail\EmailRegister;
use Hash;
use Auth;
use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Slide;
use App\Product;
use App\TypeProduct;
use DB;
use Session;
class PageController extends Controller
{
    //hung

    public function getIndex()
    {
        $slide = Slide::All();
        $product_types = TypeProduct::All();
        //SELECT * FROM `colors` join products where colors.id= products.id_color GROUP BY (products.id_color)

        $colors = DB::table('colors')
            ->select(['colors.id', 'colors.name'])
            ->join('products', 'colors.id', '=', 'products.id_color')
            ->groupBy('products.id_color')
            ->get();
        //select color from products group by (color);
        // echo $colors;
        // echo $slide;
        $new_products = Product::where('new', 1)->paginate(6);
        $products = DB::table('products')->where('new', 0)->get();
        return view('page.trangchu')->with([
            'colors' => $colors, 'product_types' => $product_types,
            'slide' => $slide, 'new_products' => $new_products, 'products' => $products
        ]);
    }

    public function getSearch(Request $request)
    {
        if (!$request->search) {
            $col = $request->color;
            $pri = $request->price;
            $typ = $request->type;
            if (!$col && !$pri && !$typ) {
                return redirect()->route('trangchu');
            }
            $slide = Slide::All();
            $product_types = TypeProduct::All();
            $colors = DB::table('colors')
                ->select(['colors.id', 'colors.name'])
                ->join('products', 'colors.id', '=', 'products.id_color')
                ->groupBy('products.id_color')
                ->get();
            $price1 = 0;
            $price2 = 100000000;
            if ($pri == 500) {
                $price2 = 50000;
            } else if ($pri == 1000) {
                $price1 = 500000;
                $price2 = 10000000;
            } else if ($pri == 2000) {
                $price1 = 10000000;
                $price2 = 20000000;
            } else if ($pri == 5000) {
                $price1 = 20000000;
                $price2 = 50000000;
            } else if ($pri == 6000) {
                $price1 = 50000000;
            }
            //SELECT * FROM `products` WHERE products.unit_price >10000000 AND
            //   products.unit_price<20000000 and id_type =1
            if ($typ && $col) {
                $products = DB::table('products')
                    ->where('id_color', intval($col))
                    ->where('unit_price', '<', floatval($price2))
                    ->Where('unit_price', '>', floatval($price1))
                    ->where('id_type', intval($typ))
                    ->paginate(9);
                // echo (json_encode($products));
            } else if (!$typ && $col) {
                $products = DB::table('products')
                    ->where('id_color', intval($col))
                    ->where('unit_price', '<', floatval($price2))
                    ->Where('unit_price', '>', floatval($price1))
                    ->paginate(9);
                // echo (json_encode($products));
            } else if ($typ && !$col) {
                $products = DB::table('products')
                    // ->where('id_color', intval($col))
                    ->where('unit_price', '<', floatval($price2))
                    ->Where('unit_price', '>', floatval($price1))
                    ->where('id_type', intval($typ))
                    ->paginate(9);
                // echo (json_encode($products));
            } else {
                $products = DB::table('products')
                    ->where('unit_price', '<', floatval($price2))
                    ->Where('unit_price', '>', floatval($price1))
                    // ->where('id_type', intval($typ))
                    ->paginate(9);
                // echo (json_encode($products));
            }
            if (count($products) < 1) {
                Session::flash('alert-danger', 'Not found any products');
                return redirect('index');
            } else {
                return view('page.search')->with([
                    'colors' => $colors, 'product_types' => $product_types,
                    'slide' => $slide, 'products' => $products
                ]);
            }
        } else {

            $slide = Slide::All();
            $product_types = TypeProduct::All();
            $colors = DB::table('colors')
                ->select(['colors.id', 'colors.name'])
                ->join('products', 'colors.id', '=', 'products.id_color')
                ->groupBy('products.id_color')
                ->get();
            $search = $request->search;
            //query
            $products = DB::table('products')
                ->select([
                    'products.id', 'products.name',
                    'products.description', 'products.unit_price',
                    'products.promotion_price', 'products.image',
                    'products.new', 'products.id_type',
                    'products.id_color'
                ])
                ->join('colors', 'colors.id', '=', 'products.id_color')
                ->join('product_types', 'product_types.id', '=', 'products.id_type')
                ->where('colors.name', 'like', '%' . $search . '%')
                ->orWhere('product_types.name', 'like', '%' . $search . '%')
                ->orWhere('products.name', 'like', '%' . $search . '%')
                ->paginate(9);
            if (count($products) < 1) {
                Session::flash('alert-danger', 'Not found any products');
                return redirect('index');
            } else {
                return view('page.search')->with([
                    'colors' => $colors, 'product_types' => $product_types,
                    'slide' => $slide, 'products' => $products
                ]);
            }
        }
    }
    //mai
    public function getSignup()
    {
        return view('page.register');
    }
    public function postSignup(registerRequest $Request)
    {
        $users = new User();
        $users->name = $Request->name;
        $users->email = $Request->email;
        $users->role = 'user';
        $users->password = Hash::make($Request->password);
        $users->save();
        \Mail::to($users->email)->send(new EmailRegister($Request->name));
        return redirect('login')->with('message', 'Register successfully');
    }
    public function getLogin()
    {
        return view('page.login');
    }
    public function getLogout()
    {
        Session::put('login',false);
        return $this->getLogin();
    }
    public function postLogin(loginRequest $Request)
    {
        $loginIfor = array('email' => $Request->email, 'password' => $Request->password);
        $user = User::where([
            ['email', '=', $Request->email],
        ])->first();
        if ($user) {
            if (Auth::attempt($loginIfor)) {
                Session::put('login',$user->id);
                if($user->role=="admin") {
                    return redirect('indexAdmin')->with(['thongbao' => 'Log in successfully']);
                }
                return redirect('index')->with(['thongbao' => 'Log in successfully']);
            } else {
                return redirect('login')->with(['message' => 'ÄÄƒng nháº­p khÃ´ng thÃ nh cÃ´ng,email hoáº·c ']);
            }
        } else {
            return redirect('register')->with(['messages' => 'TÃ i khoáº£n chÆ°a kÃ­ch hoáº¡t,Vui lÃ²ng Ä‘Äƒng kÃ­ tÃ i khoáº£n']);
        }
    }
    public function getDetail($id){
        $product=Product::find($id);
        $allPros=Product::where('id_type',$product->id_type)
        ->where('id','<>',$id)->get();
        // echo json_encode($allPros);
       return view('page.detail')->with(['product'=> $product, 'allPros'=>$allPros]);
    }

}
