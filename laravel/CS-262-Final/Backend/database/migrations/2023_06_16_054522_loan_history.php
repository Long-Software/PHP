<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoanHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_history', function (Blueprint $table) {
            $table->id('loan_history_id');
            $table->foreignId('package_id')->references('package_id')->on('loan_packages')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('borrower_id')->references('borrower_id')->on('borrowers')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('loan_history');
    }
}
