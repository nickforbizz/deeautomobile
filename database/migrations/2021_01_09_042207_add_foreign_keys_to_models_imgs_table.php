<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToModelsImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('models_imgs', function (Blueprint $table) {
            $table->foreign('veh_model_id', 'FK_models_imgs_vehicle_models')->references('id')->on('vehicle_models')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('models_imgs', function (Blueprint $table) {
            $table->dropForeign('FK_models_imgs_vehicle_models');
        });
    }
}
