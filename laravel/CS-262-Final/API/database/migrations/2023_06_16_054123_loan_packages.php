<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoanPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_packages', function (Blueprint $table) {
            $table->id('package_id')->autoIncrement();
            $table->string('loan_name');
            $table->string('loan_plan');
            $table->float('loan_amount');
            $table->float('loan_min');
            $table->float('loan_max');
            $table->date('loan_date')->nullable();
            $table->integer('loan_rate');
            $table->string('loan_rate_per');//D: Per Day, W: Per Week, M: Per Month, Y: Per Year
            $table->integer('loan_duration');
            $table->string('loan_duration_in');//D: Days, W: Weeks, M: Months, Y: Years
            $table->integer('lender_id')->unsigned()->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('payment_cycle')->default(3); // 0:'weekly', 1:'biweekly', 2:'monthly', 3:'yearly'
            $table->integer('num_of_cycle');
            $table->integer('processing_fees')->nullable();
            $table->integer('insurance_fees')->nullable();
            $table->text('loan_description')->nullable();
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
        Schema::dropIfExists('loan_packages');
    }
}
