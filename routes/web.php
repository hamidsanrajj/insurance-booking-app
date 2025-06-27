<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PlanController;
use App\HTTP\Controllers\QuoteController;
use App\HTTP\Controllers\SubscribeController;
use App\HTTP\Controllers\ContactController;
use App\HTTP\Controllers\PremiumController;
use App\HTTP\Controllers\BuyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });


Route::view('/','index')->name('home');
Route::view('/about','include/views/about')->name('about');
Route::view('/service','include/views/services')->name('service');
Route::view('/contact','include/views/contact')->name('contact');

Route::view('/car-insurance','include/views/insurance/car')->name('car');
Route::view('/health-insurance','include/views/insurance/health')->name('health');
Route::view('/travel-insurance','include/views/insurance/travel')->name('travel');
Route::view('/marine-insurance','include/views/insurance/marine')->name('marine');

Route::view('/car-insurance-plan','include/views/insurance/plan/car')->name('car-insurance-plan');
Route::view('/car-insurance-ime','include/views/insurance/insurance');
Route::view('/add-car-insurance-plan','include/views/insurance/plan/addPlan')->name('add-car-insurance-plan');


Route::get('/add-car-insurance-plan', [PlanController::class, 'index']);
Route::post('/add-car-insurance-plan', [PlanController::class, 'addCarPlan']);


Route::get('/car-insurance-plan', [PlanController::class, 'index2']);
Route::post('/car-insurance-plan', [PlanController::class, 'CarPlan']);

Route::get('/health-insurance-plan', [PlanController::class, 'index3']);
Route::post('/health-insurance-plan', [PlanController::class, 'HealthPlan']);

Route::get('/travel-insurance-plan', [PlanController::class, 'index4']);
Route::post('/travel-insurance-plan', [PlanController::class, 'TravelPlan']);

Route::get('/marine-insurance-plan', [PlanController::class, 'index5']);
Route::post('/marine-insurance-plan', [PlanController::class, 'MarinePlan']);


Route::get('/quote', [QuoteController::class, 'index']);
Route::post('/quote', [QuoteController::class, 'quote']);

Route::get('/subscribe', [SubscribeController::class, 'index']);
Route::post('/subscribe', [SubscribeController::class, 'subscribe']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'query']);

Route::view('/contact','include/views/contact')->name('contact');

Route::view('/car-insurance-plan-premium','include/views/insurance/insurance');

Route::get('/car-insurance-plan-premium', [PremiumController::class, 'index']);
Route::post('/car-insurance-plan-premium', [PremiumController::class, 'PremiumCar']);

Route::view('/car-insurance-plan-buy','include/views/insurance/plan/buy/car');

Route::get('/car-insurance-plan-buy', [BuyController::class, 'index']);
Route::post('/car-insurance-plan-buy', [BuyController::class, 'BuyInsuranceCar']);

