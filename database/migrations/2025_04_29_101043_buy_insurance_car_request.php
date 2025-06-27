<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BuyInsuranceCarRequest;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('buy_insurance_car_requests', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('year');
            $table->string('value');
            $table->string('name');
            $table->string('phone');
            $table->string('logo');
            $table->string('title');
            $table->string('rate');
            $table->string('installment');
            $table->string('total');
            $table->string('cnic');
            $table->string('email');
            $table->string('reg');
            $table->string('survey');
            $table->string('date');
            $table->string('time');
            $table->string('city');
            $table->string('order_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
