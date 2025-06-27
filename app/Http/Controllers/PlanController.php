<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CarPlan;
use App\Models\CarInsurance;
use App\Models\HealthInsurance;
use App\Models\TravelInsurance;
use App\Models\MarineInsurance;

class PlanController extends Controller
{
    //
    public function index()
    {
        return view('include/views/insurance/plan/addPlan');
        // return view('include/views/insurance/plan/car');
    }

    public function index2()
    {
        return view('include/views/insurance/plan/car');
    }

    public function CarPlan(Request $request)
    {
        $brand = $request->input('brand');
        $model = $request->input('model');
        $year = $request->input('year');
        $value = $request->input('value');
        $name = $request->input('name');
        $phone = $request->input('phone'); 

        CarInsurance::create([
            'brand' => $brand,
            'model' => $model,
            'year' => $year,
            'value' => $value,
            'name' => $name,
            'phone' => $phone,
        ]);

        $rs2 =  DB::table('car_insurances')->select('*')->orderBy('id', 'DESC')->take(1)->get();
        $rs1 = DB::table('car_insurances')->select('value')->orderBy('id', 'DESC')->take(1)->get();   
        $rs = DB::table('car_plans')->get();
        return view('include/views/insurance/plan/car',compact('rs','rs1','rs2')); 
    }

    public function index3()
    {
        return view('include/views/insurance/health');
    }

    public function HealthPlan(Request $request)
    {
        $person = $request->input('person');
        $age = $request->input('age');
        $cover = $request->input('cover');
        $name = $request->input('name');
        $phone = $request->input('phone'); 

        HealthInsurance::create([
            'person' => $person,
            'age' => $age,
            'cover' => $cover,
            'name' => $name,
            'phone' => $phone,
        ]);

        return view('include/views/insurance/insurance');
    }


    public function index4()
    {
        return view('include/views/insurance/travel');
    }

    public function TravelPlan(Request $request)
    {
        $trip = $request->input('trip');
        $travelling = $request->input('travelling');
        $departure = $request->input('departure');
        $return = $request->input('return');
        $passenger = $request->input('passenger');
        $name = $request->input('name');
        $phone = $request->input('phone'); 

        TravelInsurance::create([
            'trip' => $trip,
            'travelling' => $travelling,
            'departure' => $departure,
            'return' => $return,
            'passenger' => $passenger,
            'name' => $name,
            'phone' => $phone,
        ]);

        return view('include/views/insurance/insurance');
    }


    public function index5()
    {
        return view('include/views/insurance/marine');
    }

    public function MarinePlan(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone'); 

        MarineInsurance::create([
            'name' => $name,
            'phone' => $phone,
        ]);

        return view('include/views/insurance/insurance');
    }

    public function addCarPlan(Request $request)
    {
        $logo = $request->input('logo');
        $title = $request->input('title');
        $rate = $request->input('rate');

        CarPlan::create([
            'logo' => $logo,
            'title' => $title,
            'rate' => $rate
        ]);

        return view('include/views/insurance/plan/addPlan');
    }
}
