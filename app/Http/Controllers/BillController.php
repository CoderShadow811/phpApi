<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;


class BillController extends Controller
{
    public function index(){
        $bill=Bill::all();
        return $bill;
    }
    public function created(Request $request){

        $bill=new Bill();
        
      
        $bill->name=$request->name;
        $bill->statebilling=$request->statebilling;

        $bill->stateVariant=$request->stateVariant;
        $bill->total=$request->total;
        $bill->save();
        return $bill;
    }
}
