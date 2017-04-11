<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Offers;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function getPurchases(){
      $purchase = Purchase::join('offering', 'offering.id', '=', 'offeringID')->get(['purchase.id', 'title', 'quantity', 'price']);
      return response()->json($purchase, 200);
    }

    public function createPurchase(Request $request){
      // need to validate request
      $purchase = Purchase::create($request->all());
      return response()->json($purchase, 200);
    }

    public function showPurchases(){
      return view('purchase/index');
    }

    public function newPurchase(){
      $offers = Offers::all();
      return view('purchase/create', compact('offers'));
    }
}
