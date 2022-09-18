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
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('suffix')->nullable();
            $table->string('gender');
            $table->date('dob');
            $table->string('Bplace');
            $table->string('address');
            $table->string('unit');
            $table->string('occupation');
            $table->string('educ');
            $table->string('MI');
            $table->string('civilStatus');
            $table->string('religion');
            $table->string('contactNum');
            $table->string('TIN');
            $table->string('SSSnum');
            $table->string('email');
            $table->string('NumDependents');
            $table->string('spouseFname');
            $table->string('spouseAge');
            $table->string('spouseOcc');
            $table->string('spouseMI');
            $table->string('spouseEmplrName');
            $table->string('spouseConNum');
            $table->string('benName');
            $table->string('benRelation');
            $table->string('benAge');
            $table->string('benAddress');
            $table->string('benMothersLname');
            $table->string('benMothersFname');
            $table->string('benMothersMname');
            // $table->string('selfiepic');
            // $table->string('empIDpic');
            $table->integer('is_approved')->default(0);        
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
        Schema::dropIfExists('membership_applications');
    }
};
