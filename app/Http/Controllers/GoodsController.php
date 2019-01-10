<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class GoodsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('goods-in.goodsin');
    }

    public function getGoodsInData(Request $r){
        $products=Product::select('productId','brandId','ftCode','ft','mainImage','style','ftCode',
            'color','ean','costPrice','price','RRP');

        $datatables = Datatables::of($products);
        return $datatables->make(true);
    }
}
