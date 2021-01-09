<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable()->default(0)->index('FK_vehicle_models_users');
            $table->integer('make_id')->nullable()->default(0)->index('FK_vehicle_models_vehicle_makes');
            $table->integer('model_id')->nullable()->default(0);
            $table->string('name', 100)->nullable();
            $table->string('description', 500)->nullable();
            $table->string('label', 100)->nullable();
            $table->integer('price')->nullable();
            $table->string('manYr', 100)->nullable();
            $table->string('speed', 100)->nullable();
            $table->float('mileage', 10, 0)->nullable();
            $table->string('condition', 100)->nullable();
            $table->string('bodyType', 100)->nullable();
            $table->string('colour', 100)->nullable();
            $table->string('fuel', 100)->nullable();
            $table->string('transmission', 100)->nullable();
            $table->string('duty', 100)->nullable();
            $table->string('interior', 100)->nullable();
            $table->float('cc', 10, 0)->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_models');
    }
}
