<?php

use App\Models\User;
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
        Schema::create('express_loan_apps', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('acc_id');
            $table->string('name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('loan_type');
            $table->string('emp');
            $table->date('emp_address');
            $table->string('email');
            $table->string('amount');
            $table->string('mode_payment');
            $table->string('term_applied');
            $table->string('phone_no');
            $table->string('tin');
            $table->string('fb_acc');
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
        Schema::dropIfExists('express_loan_apps');
    }
};
