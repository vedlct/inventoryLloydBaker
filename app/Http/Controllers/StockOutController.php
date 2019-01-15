<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
use App\StockOut;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Excel;
use Auth;
class StockOutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $shops=Shop::get();
        return view('stock.out',compact('shops'));
    }

    public function getdata(Request $r){
        $stockout=StockOut::select('stockout.*');

        if($r->shopId){
            $stockout=$stockout->where('fkshopId',$r->shopId);
        }

        $datatables = Datatables::of($stockout);
        return $datatables->make(true);
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

        foreach ($results as $result){
            $product=Product::where('ean',$result->barcode)->first();

            //If Product-Ean matches
            if($product){
                $stockOut=new StockOut();
                $stockOut->fkproductId=$product->productId;
                $stockOut->fkshopId=$result->shop_no;
                $stockOut->dateOfSale= date("Y-m-d",strtotime($result->date));
                $stockOut->timeOfSale= date("H:i",strtotime($result->time_of_sale));
                $stockOut->tillNo=$result->till_no;
                $stockOut->receiptNo=$result->receipt_no;
                $stockOut->staffNo=$result->staff_no;
                $stockOut->barCode=$result->barcode;
                $stockOut->quantity=$result->stk;
                $stockOut->actualPrice=$result->actual_price;
                $stockOut->salePrice=$result->sale_price;
                if($result->stk<0){
                    //For negative Quantity
                    $stockOut->currentStatus="refund";
                }
                else{
                    $stockOut->currentStatus="in";
                }

                $stockOut->insertType="b";
                $stockOut->insertedBy=Auth::user()->userId;

                $stockOut->save();


            }
        }

        return $results;
    }
}
