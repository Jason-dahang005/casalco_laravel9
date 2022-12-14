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
            $table->foreignId('loan_applications_id')->constrained();
            $table->string('length_of_service');
            $table->string('employment_status');
            $table->string('present_position');
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
