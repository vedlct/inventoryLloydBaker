<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function productCalculation(){

        return view('profit.profitCalculation');
    }

    public function mostProfitableProduct(){

        return view('profit.mostProfitableProduct');
    }

    public function stockValuation(){

        return view('report.sellInformation');

    }
}
