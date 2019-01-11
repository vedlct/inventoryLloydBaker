<?php

namespace App\Http\Controllers;

use App\Product;
use App\StockWh;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use DB;
class GoodsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
//        $products=Product::select('product.productId','product.brandId','product.ft','product.mainImage','product.style','product.ftCode',
//            'product.color','product.ean','product.costPrice','product.retailPrice','product.RRP',DB::raw('sum(stockwh.quantity) as qty'))
//            ->leftJoin('stockwh','stockwh.fkproductId','product.productId')
//            ->groupBy('product.productId')
//            ->get();
//
//        return $products;

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

    public function insertGoodsInStock(Request $r){

        for($i=0;$i<count($r->productsId );$i++){
            $stockwh=new StockWh();
            $stockwh->fkproductId=$r->productsId[$i];
            $stockwh->quantity=$r->values[$i];
            $stockwh->currentStatus="in";
            $stockwh->insertedBy=Auth::user()->userId;
            $stockwh->insertType="1";
            $stockwh->save();

        }






        return  response()->json('Success');

    }
}
