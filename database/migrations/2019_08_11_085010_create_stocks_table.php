<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name');
            $table->string('type');
            $table->integer('discount')->nullable();
            $table->date('timeStart')->nullable();
            $table->date('timeStop')->nullable();
            $table->integer('weight-total')->nullable();
            $table->integer('weight_position_total')->nullable();
            $table->integer('weight_user_total')->nullable();
            $table->integer('price-total')->nullable();
            $table->integer('price_position_total')->nullable();
            $table->integer('price_user_total')->nullable();
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
        Schema::dropIfExists('stocks');
    }
}
