<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('previous_job_place')->nullable();
            $table->integer('experiance_year')->nullable();
            $table->string('certificate_1')->nullable();
            $table->string('certificate_2')->nullable();
            $table->string('certificate_3')->nullable();
            $table->string('certificate_4')->nullable();
            $table->integer('ssc_year')->nullable();
            $table->integer('hsc_year')->nullable();
            $table->integer('nursing_pass_year')->nullable();
            $table->string('ssc_school_name')->nullable();
            $table->string('hsc_collage_name')->nullable();
            $table->string('nursing_collage_name')->nullable();
            $table->string('institute_1')->nullable();
            $table->string('institute_2')->nullable();
            $table->string('present_address')->nullable();
            $table->string('parmenant_address')->nullable();
            $table->integer('bank_data_id')->nullable();
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
        Schema::dropIfExists('nurses');
    }
}
