<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IpAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_addresses', function (Blueprint $table) {
            $table->id('address_id');
            $table->decimal('lng', 8, 5)->nullable();
            $table->decimal('lat', 8, 5)->nullable();
            $table->string('ip_address')->default('0.0.0.0');
            $table->foreignId('user_id')->references('user_id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
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
        //
    }
}
