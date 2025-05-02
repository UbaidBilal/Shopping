<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudController extends Controller
{
    public function show(){
        
        $products = DB::table('products')->get();
        // dd($products);
       
        return view('dashboard',['data'=>$products]);
    }
    public function index(){
        
        $products = DB::table('products')->get();
        return view('index',['data'=>$products]);
    }
    public function single($id){
        $product = DB::table('products')->where('id',$id)->get();
        return view('details',['data'=>$product]);
    }
    public function add(Request $req){
        $req->validate([
            'image'=>'required|mimes:png,jpg,jpeg|max:3000'
        ]);
        
        
        $path = $req->image->store('image','public');
        
        $products = DB::table('products')->insert([
            'product_name'=>$req->product_name,
            'product_details'=>$req->product_details,
            'price'=>$req->price,
            'category'=>$req->category,
            'quantity'=>$req->quantity,
            'image'=> $path,

        ]);
        if($products){
            return redirect('dashboard');
        }else{
            echo "<h2>Product Not Added</h2>";
        }
        }
    public function update(Request $req){
       
        if($req->hasFile('image')){
           
        $image_path = public_path("storage/").$req->image;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
            
            $path = $req->image->store('image','public'); 
            
            $product = DB::table('products')->where('id',$req->id)->update([
                'product_name'=>$req->product_name,
                'product_details'=>$req->product_details,
                'price'=>$req->price,
                'category'=>$req->category,
                'quantity'=>$req->quantity,
                'image'=>$path]);
            if($product){
                return redirect('dashboard');
            }else{
                echo "<h2>Data Not Updated</h2>";
            }

        }else{

        $product = DB::table('products')->where('id',$req->id)->update([
            'product_name'=>$req->product_name,
            'product_details'=>$req->product_details,
            'price'=>$req->price,
            'category'=>$req->category,
            'quantity'=>$req->quantity,
    ]);
        if($product){
            return redirect('dashboard');
        }else{
            echo "<h2>Data Not Updated</h2>";
        }
    }
    }
    public function edit($id){
        $product = DB::table('products')->find($id);
        return view('edit',['data'=>$product]);
    }
    public function delete($id){
        $product = DB::table('products')->where('id',$id)->delete();
        if($product){
            return redirect()->back();
        }else{
            echo "<h2>Data Not Deleted</h2>";
        }
    }
    public function form(){
        return view('form');
    }
    
}
