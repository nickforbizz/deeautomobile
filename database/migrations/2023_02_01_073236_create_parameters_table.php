<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->integer('rec_type')->default(01);
            $table->string('car_listing')->default("SL")->comment('SL-sidebar listing, SG-sidebar grid, NSL, NSG -N for negating');
            $table->string('blog_listing')->default("SL")->comment('SL-sidebar listing, SG-sidebar grid, NSL, NSG -N for negating');
            $table->boolean('guest_email_notifications')->default('0');
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
        Schema::dropIfExists('parameters');
    }
}
