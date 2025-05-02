<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function addorder(Request $req){
        
        
        $order = DB::table('order')->insert([
            'product_name'=>$req->product_name,
            'details'=>$req->details,
            'category'=>$req->category,
            'price'=>$req->price,
            'quantity'=>$req->quantity,
            'customer_name'=> $req->customer_name,
            'mobile'=> $req->mobile,
            'address'=> $req->address,
            'confirm_address'=> $req->confirm_address,

        ]);
        if($order){
            $products = DB::table('products')->get();
        return view('index',['data'=>$products]);
        }else{
            echo "<h2>Order Not Submit</h2>";
        }
        }
}
