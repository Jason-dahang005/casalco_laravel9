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
        Schema::create('regular_special_loan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_applications_id');
            $table->string('length_of_service');
            $table->string('employment_status');
            $table->string('present_position');
            $table->string('product_loan');
            $table->integer('borrower_income');
            $table->integer('other_income');
            $table->integer('spouse_income');
            $table->integer('amount_applied');
            $table->integer('term_applied');
            $table->string('mode_of_payment');
            $table->integer('scanned_signature');
            $table->integer('food');
            $table->integer('education_bill');
            $table->integer('electric_bill');
            $table->integer('water_bill');
            $table->integer('transportation');
            $table->integer('allowances');
            $table->integer('others');
            $table->foreign('loan_applications_id')->references('id')->on('loan_applications')->onDelete('cascade');
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
        Schema::dropIfExists('regular_special_loan_details');
    }
};
