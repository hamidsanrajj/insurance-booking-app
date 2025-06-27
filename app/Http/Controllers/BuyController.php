<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BuyInsuranceCar;
use App\Models\BuyInsuranceCarRequest;

class BuyController extends Controller
{
    //
    public function index(Request $request)
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

        BuyInsuranceCar::create([
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
        ]);

        $rs =  DB::table('buy_insurance_cars')->select('*')->orderBy('id', 'DESC')->take(1)->get();
        return view('include/views/insurance/plan/buy/car',compact('rs'));
         
    }

    public function BuyInsuranceCar(Request $request)
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
        $cnic = $request->input('cnic');
        $email = $request->input('email');
        $reg = $request->input('reg');
        $survey = $request->input('survey');
        $date = $request->input('date');
        $time = $request->input('time'); 
        $city = $request->input('city'); 
        $order = mt_rand(1000, 9999);

        BuyInsuranceCarRequest::create([
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
            'cnic' => $cnic,
            'email' => $email,
            'reg' => $reg,
            'survey' => $survey,
            'date' => $date,
            'time' => $time,
            'city' => $city,
            'order_number'=> $order,
        ]);


        $rs =  DB::table('buy_insurance_car_requests')->select('order_number')->orderBy('id', 'DESC')->take(1)->get();
        return view('include/views/insurance/message/buy',compact('rs'));

        //return view('include/views/insurance/insurance');

    }
}
