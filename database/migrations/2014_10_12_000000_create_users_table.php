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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('access_token')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->string('idcard')->nullable();
            $table->string('code_user')->nullable();
            $table->integer('status')->default('0');
            $table->integer('point')->default('0');
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('startday')->nullable();
            $table->string('endday')->nullable();
            $table->integer('bank_id')->default('0');
            $table->integer('fav')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
