<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regular_special_loan_details_id')->constrained();
            $table->string('scanned_signature');
            $table->integer('food');
            $table->integer('education_bill');
            $table->integer('electric_bill');
            $table->integer('water_bill');
            $table->integer('transportation');
            $table->integer('allowances');
            $table->integer('others');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_expenses');
    }
};
