<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    //
	public $order;
    public function __construct(Order $order){
        $this->order = $order;
    }

    public function placeOrder(Request $request){
    	try{
    		//dd('ok');
    		//return view('order.placeOrder');
    		return view('order.placeOrder');
    	}catch(Exception $ex){
    		dd($ex->getMessage(),$ex->getLine());
    	}

    }
}
