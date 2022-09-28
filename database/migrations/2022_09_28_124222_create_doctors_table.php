<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('year_of_experience')->nullable();
            $table->string('certificate_1')->nullable();
            $table->string('certificate_2')->nullable();
            $table->string('certificate_3')->nullable();
            $table->string('certificate_4')->nullable();
            $table->integer('ssc_year')->nullable();
            $table->integer('hsc_year')->nullable();
            $table->integer('mbbs_year')->nullable();
            $table->string('school')->nullable();
            $table->string('college')->nullable();
            $table->string('medical_college')->nullable();
            $table->string('institute_1')->nullable();
            $table->string('institute_2')->nullable();
            $table->integer('present_address_id')->nullable();
            $table->integer('permanent_address_id')->nullable();
            $table->integer('bank_data_id')->nullable();
            $table->string('is_active')->nullable();
            $table->string('is_blocked')->nullable();
            $table->string('creator')->nullable();
            $table->string('slug')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('doctors');
    }
}
