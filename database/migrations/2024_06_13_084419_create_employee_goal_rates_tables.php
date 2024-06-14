<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeGoalRatesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();
        });

        Schema::create('goals', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('employee_goal_rates', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('employee_id');
            $table->bigInteger('goal_id');
            $table->integer('progress');
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('goal_id')->references('id')->on('employees');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
