<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PremiumCar;

class PremiumController extends Controller
{
    //

    public function index()
    {
        return view('include/views/insurance/plan/car');
    }

    public function PremiumCar(Request $request)
    {
        $brand = $request->input('brand');
        $model = $request->input('model');
        $year = $request->input('year');
        $value = $request->input('value');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $logo = $request->input('logo');
        $title = $request->input('title');
        $rate = $request->input('rate');
        $installment = $request->input('installment');
        $total = $request->input('total');
        $order = mt_rand(1000, 9999);

        PremiumCar::create([
            'brand' => $brand,
            'model' => $model,
            'year' => $year,
            'value' => $value,
            'name' => $name,
            'phone' => $phone,
            'logo' => $logo,
            'title' => $title,
            'rate' => $rate,
            'installment' => $installment,
            'total' => $total,
            'order_number' =>$order,
        ]);

        $rs =  DB::table('premium_cars')->select('order_number')->orderBy('id', 'DESC')->take(1)->get();
        return view('include/views/insurance/message/enquire',compact('rs'));

        //return view('include/views/insurance/insurance');
    }

}
