<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('order_id');
            $table->integer('logistic_id')->default(0);
            $table->integer('delivery_destination_from_id')->default(0);
            $table->integer('delivery_destination_to_id')->default(0);
            $table->integer('delivery_time')->default(1);
            $table->float('delivery_cost_client',2)->default(0);
            $table->float('delivery_cost_purchase',2)->default(0);
            $table->integer('delivery_distance')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
