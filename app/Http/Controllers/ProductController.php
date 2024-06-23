<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
       return view('product.index');
    }
    // Create
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $rules=[
            'name'=>'required|min:3',
            'sku'=>'required|min:3',
            'price'=>'required|numeric',

        ];

        // if($request->image != ""){
        //     $rules['image'] = 'image'; 
        // }
$validator= Validator::make($request->all(),$rules);
// 
if($validator->fails()){
    return redirect()->route('create')->withInput()->withErrors($validator);
        
}

// 
$product = new Product();
$product->name = $request->name;
$product->sku = $request->sku;
$product->price = $request->price;
$product->description = $request->description;
// add to database
$product->save();

if($request->image!=""){

    $image = $request->image;
    $ext = $image->getClientOriginalExtension();
    $imageName = time().'.'.$ext; //Only Unique name save on server
    
    // Save image to product directory
    $image->move(public_path('uploads/products'),$imageName);
    
    // save image name in to database
    $product->image = $imageName;
    $product->save();
}

    return redirect()->route('products');
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
