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
$validator= Validator::make($request->all(),$rules);
// 
if($validator->fails()){
    return redirect()->route('product.create')->withInput()->withErrors($validator);
        
}

// 
$product = new Product();
$product->name = $request->name;
$product->sku = $request->sku;
$product->price = $request->price;
$product->description = $request->description;
// add to database
$product->save();

return redirect()->route('create');
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
