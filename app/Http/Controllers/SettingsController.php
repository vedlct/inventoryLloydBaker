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
use Session;

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

    // Insert Shop
    public function insertShop(Request $r){

        $r->validate([
            'name' => 'required|max:45',
            'phone' => 'required|max:25',
            'email' => 'required|unique:shop,shopEmail',
            'contactPerson' => 'required|max:45',
            'status' => 'required|max:45',
        ]);

        $shop = new Shop();
        $shop->shopName = $r->name;
        $shop->shopEmail = $r->email;
        $shop->shopPhone = $r->phone;
        $shop->shopContactPerson = $r->contactPerson;
        $shop->shopLocation = $r->location;
        $shop->shopDescription = $r->desc;
        $shop->shopStatus = $r->status;
        // $shop->deleted_at = NULL;
        $shop->save();

        Session::flash('message', 'New Shop Added!');

        return back();
    }

    // Show all Shop
    public function getAllShop(Request $r){
        $shops = Shop::select('shop.shopName','shop.shopLocation','shop.shopStatus','shop.shopId')->where('deleted_at', null);

        $datatables = Datatables::of($shops);
        return $datatables->make(true);
    }

    // Edit shop page
    public function editShop($id){
        $shop = Shop::findOrFail($id);
        return view('settings.EditShop')->with('shop', $shop);
    }

    // Update Shop
    public function updateShop(Request $r){

        $r->validate([
            'name' => 'required|max:45',
            'phone' => 'required|max:25',
            // 'email' => 'required|unique:shop,shopEmail',
            'contactPerson' => 'required|max:45',
            'status' => 'required|max:45',
        ]);

        $shop = Shop::findOrFail($r->shopId);
        $shop->shopName = $r->name;
        $shop->shopEmail = $r->email;
        $shop->shopPhone = $r->phone;
        $shop->shopContactPerson = $r->contactPerson;
        $shop->shopLocation = $r->location;
        $shop->shopDescription = $r->desc;
        $shop->shopStatus = $r->status;
        $shop->save();

        Session::flash('message', 'Shop Updated!');

        return back();
    }

    // delete Shop
    public function deleteShop(Request $r){
        $shop = Shop::findOrFail($r->id);
        $shop->deleted_at = date('Y-m-d');
        $shop->save();

        Session::flash('message', 'Shop Deleted!');

        return back();
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
