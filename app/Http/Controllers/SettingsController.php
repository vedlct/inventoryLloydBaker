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
class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*Product*/
    public function product()
    {
        return view('settings.productCategory');
    }

    public function addProduct()
    {
        return view('settings.addProductCategory');
    }

    /*Shop*/
    public function shop()
    {
        return view('settings.location');
    }

    public function addShop()
    {
        return view('settings.addLocation');
    }

    public function editShop()
    {

        return view('settings.EditShop');
    }

    public function user()
    {
    }

    public function rangePlan()
    {


        $shop = Shop::select('shopName', 'shopId')->get();
        return view('settings.rangePlan', compact('shop'));
    }

    public function getRangePlanData(Request $r)
    {
        $products = Product::select('product.productId', 'product.brandId', 'product.ft', 'product.mainImage', 'product.style', 'product.ftCode',
            'product.color', 'product.ean', 'product.costPrice', 'product.retailPrice', 'product.RRP', DB::raw('sum(stockwh.quantity) as qty'))
            ->leftJoin('stockwh', 'stockwh.fkproductId', 'product.productId')
            ->groupBy('product.productId');

        if ($r->shopfilter){
            $products = $products->leftJoin('rangeplan','rangeplan.fkproductId','productId')
                ->where('fkshopId', $r->shopfilter);
        }
        $datatables = Datatables::of($products);
        return $datatables->make(true);
    }

    public function insertRangePlanData(Request $r)
    {
        for ($i = 0; $i < count($r->productsId); $i++) {
            $ragneplan = new RangePlan();
            $ragneplan->fkproductId = $r->productsId[$i];
            $ragneplan->quantity = $r->values[$i];
            $ragneplan->fkshopId = $r->shopid;
            $ragneplan->insertedBy = Auth::user()->userId;
            $ragneplan->save();
        }
    }
}
