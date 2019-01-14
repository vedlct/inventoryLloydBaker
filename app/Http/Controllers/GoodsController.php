<?php

namespace App\Http\Controllers;

use App\Product;
use App\StockWh;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use DB;
use Excel;
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

    public function insertGoodsInStock(Request $r){

        for($i=0;$i<count($r->productsId );$i++){
            $stockwh=new StockWh();
            $stockwh->fkproductId=$r->productsId[$i];
            $stockwh->quantity=$r->values[$i];
            $stockwh->currentStatus="in";
            $stockwh->insertedBy=Auth::user()->userId;
            $stockwh->insertType="s";
            $stockwh->save();

        }
        return  response()->json('Success');
    }

    public function insertExcel(Request $r){
        $file = $r->file('excel');
        $fileName=$file->getClientOriginalName();
        $file->move('files',$fileName);
        chmod("files/" . $fileName, 0755);
//        return $fileName;
        $results=Excel::load('files/'.$fileName, function($reader) {

            // reader methods
            $reader->all();

        })->get();

        foreach ($results as $res){
            $product=Product::where('ean',$res->barcode)->first();


            //If Product-Ean matches
            if($product){
                $stockwh=new StockWh();
                $stockwh->fkproductId=$product->productId;
                $stockwh->quantity=$res->stk;

                if($res->stk<0){
                    //For negative Quantity
                    $stockwh->currentStatus="refund";
                }
                else{
                    $stockwh->currentStatus="in";
                }
                $stockwh->insertType="b";
                $stockwh->insertedBy=Auth::user()->userId;
                $stockwh->save();
            }

        }

        return $results;
    }
}
