<?php

namespace App\Http\Controllers;

use App\Product;
use App\RangePlan;
use App\Shop;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Yajra\DataTables\DataTables;
use DB;
use Auth;
class StockTransferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $shop = Shop::select('shopName', 'shopId')->get();
        return view('stocktransfer.show', compact('shop'));
    }

    public function getData(Request $r){
        $products = Product::select('product.productId', 'product.brandId', 'product.ft', 'product.mainImage', 'product.style', 'product.ftCode',
            'product.color', 'product.ean', 'product.costPrice', 'product.retailPrice', 'product.RRP', DB::raw('sum(stocktransfer.quantity) - ifnull(SUM(stockout.quantity),0) as qtystock'))
            ->leftJoin('rangeplan','rangeplan.fkproductId','productId')
            ->leftJoin('stockout','stockout.fkproductId','productId')
            ->leftJoin('stocktransfer','stocktransfer.fkproductId','productId')
            ->groupBy('product.productId');

//        if ($r->shopfilter){
//            $products = $products->leftJoin('rangeplan','rangeplan.fkproductId','productId')
//                ->where('fkshopId', $r->shopfilter);
//        }
        $datatables = Datatables::of($products);
        return $datatables->make(true);
    }
}
