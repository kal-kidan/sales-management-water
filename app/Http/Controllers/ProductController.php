<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
     public function addProduct(Request $request){
                $product = Product::create(
                    $request->all()
                );
                if($product){
                      return redirect('/products');
                }
     }

     public function getProducts(){
        $products = Product::all();
         return $products;
}


}
