<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
class StockOutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('stock.out');
    }

    public function insertExcel(Request $r){
        $file = $r->file('excel');
        $fileName=$file->getClientOriginalName();
        $file->move('files',$fileName);
        chmod("files/" . $fileName, 0755);
//        return $fileName;
        $result=Excel::load('files/'.$fileName, function($reader) {

            // reader methods
            $reader->all();

        })->get();
        return $result;
    }
}
