<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServiceordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('service_orders', function (Blueprint $table) {
                   
                    $table->unsignedBigInteger('department_id');
                    $table->unsignedBigInteger('equipment_id');
                    $table->unsignedBigInteger('technical_id');
                    /*$table->foreign('department_id')->constrained('departments');*/

                    $table->foreign('department_id')->references('id')->on('departments');        
                    $table->foreign('equipment_id')->references('id')->on('equipment');        
                    $table->foreign('technical_id')->references('id')->on('technicals');        
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
