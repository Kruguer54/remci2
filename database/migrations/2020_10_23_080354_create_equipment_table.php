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
            //$table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedInteger('brand_id');
            //$table->foreign('brand_id')->references('id')->on('brands');
            $table->string('model',50);
            $table->string('serial_number',50);
            $table->enum('type', ['pc', 'impr']);
            $table->text('physical_state');
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
        Schema::dropIfExists('equipment');
    }
}
