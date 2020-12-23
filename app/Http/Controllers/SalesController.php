<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
class SalesController extends Controller
{
    public function addSale(Request $request){
        $price =  $request->price;
        $quantity =  $request->quantity;
        $packet =  $request->packet;
        $total = $price*$quantity*$packet;

        $request['total'] = $total;
        $sale = Sale::create(
            $request->all()
        );
        if($sale){
              return redirect('/sales');
        }
}

public function getSales(){
$sales = Sale::all();
 return $sales;
}

}
