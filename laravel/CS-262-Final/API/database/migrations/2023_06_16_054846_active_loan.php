<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActiveLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_loans', function (Blueprint $table) {
            $table->id('active_loan_id');
            $table->foreignId('loan_history_id')->references('loan_history_id')->on('loan_history')->cascadeOnDelete()->cascadeOnUpdate();
            $table->float('loan_amount');
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
        Schema::dropIfExists('active_loans');
    }
}
