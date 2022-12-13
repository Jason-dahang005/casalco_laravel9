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
        Schema::create('express_lad_loan_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_applications_id')->constrained();
            $table->string('product_loan');
            $table->string('employer');
            $table->string('employer_address');
            $table->integer('amount_applied');
            $table->integer('term_applied');
            $table->string('mode_of_payment');
            $table->string('facebook_account');
            $table->string('scanned_signature');
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
        Schema::dropIfExists('express_lad_loan_details');
    }
};
