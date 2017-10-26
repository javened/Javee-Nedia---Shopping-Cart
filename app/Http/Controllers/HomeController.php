<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Products;
use App\Carts;
use App\Cart_items;
use App\Product_categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::orderBy('id')->get();
        return view('home',['products'=>$products]);
    }

    public function add(Request $request, $id, $price){
        $cart = Carts::orderBy('id')->get();
        $a = true;
        for($i = 0; $i < count($carts); $i++){
            if($carts[$i]->customer_id == $id){
                $a = false;
            }
        }
        if ($a){
            $carts = new Carts;
            $carts->customer_id = $id;
            $carts->save();
        }
        $cart = DB::table('Carts')->where('customer_id', $id);
        $items = new Cart_items;
        $items->cart_id = $cart->id;
        $items->product_id = $request->id;
        $items->quantity = 1;
        $items->amount = $price;
        $items->save();
        return view('/home');
        
    }

    public function product($id){
        $product = Products::find($id);
        return view('product',['product' => $product]);
    }

    public function cart()
}
