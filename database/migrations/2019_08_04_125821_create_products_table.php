<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name',50);
            $table->string('factory',50);
            $table->string('type',50);
            $table->string('effects',50)->nullable()->default('Нет');
            $table->string('ral_color',12);
            $table->integer('price_purchase_id');
            $table->integer('margin')->default(20);
            $table->float('price_final',8,2);
            $table->integer('min_order')->nullable()->default(0);
            $table->integer('discount')->nullable()->default(0);
            $table->integer('stock_product_id')->default(0);
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
        Schema::dropIfExists('products');
    }
}
