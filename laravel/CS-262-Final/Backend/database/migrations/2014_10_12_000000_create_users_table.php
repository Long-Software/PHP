<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name');
            $table->string('user_username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('account_type', 1); // 'a'='admin', 'b'='bank', 'u'='user'
            $table->string('profile_image')->nullable();
            $table->integer('user_pin_code')->nullable();
            $table->boolean('user_verified')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->index('user_id');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
