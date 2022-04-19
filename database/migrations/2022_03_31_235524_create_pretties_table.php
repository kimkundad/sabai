<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrettiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pretties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('live_date')->nullable();
            $table->text('tag')->nullable();
            $table->string('image_x')->nullable();
            $table->string('image_y')->nullable();
            $table->string('title')->nullable();
            $table->longText('detail')->nullable();
            $table->string('video')->nullable();
            $table->string('stream_url')->nullable();
            $table->integer('status')->default('0');
            $table->integer('live_status')->default('0');
            $table->integer('view')->default('0');
            $table->string('phone')->nullable();
            $table->string('line')->nullable();
            $table->string('time')->nullable();
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
        Schema::dropIfExists('pretties');
    }
}
