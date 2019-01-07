<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /*Product*/
    public function product(){
        return view('settings.productCategory');
    }

    public function addProduct(){
        return view('settings.addProductCategory');
    }

   /*Shop*/
    public function shop(){
        return view('settings.location');
    }
    public function addShop(){
        return view('settings.addLocation');
    }
    public function editShop(){

        return view('settings.EditShop');
    }

    public function user(){}

    public function rangePlan(){}
}
