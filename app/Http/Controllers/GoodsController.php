<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;
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
        $products=Product::select('product.productId','product.brandId','product.ft','product.mainImage','product.style','product.ftCode',
            'product.color','product.ean','product.costPrice','product.retailPrice','product.RRP',DB::raw('sum(stockwh.quantity) as qty'))
            ->leftJoin('stockwh','stockwh.fkproductId','product.productId')
            ->groupBy('product.productId');

        $datatables = Datatables::of($products);
        return $datatables->make(true);
    }
}
