<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Stock; //追加

use Illuminate\Http\Request;

class ShopController extends Controller
{
  public function index()
  {
    $stocks = Stock::Paginate(6); //Eloquantで検索
    return view('shop.shop', compact('stocks'));
  }
  public function mycart()
  {
    $carts = Cart::all();
    return view('shop.mycart', compact('carts'));
  }
}
