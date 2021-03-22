<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('brand_id');
            $table->string('model',50);
            $table->string('serial_number',50);
            $table->enum('type', ['pc', 'impr']);
            $table->text('physical_state');
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
            //$table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
