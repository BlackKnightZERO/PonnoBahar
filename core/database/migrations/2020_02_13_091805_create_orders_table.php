<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('user_id')->nullable();
            $table->bigInteger('order_u_id')->nullable();
            $table->Integer('product_id')->nullable();
            $table->Integer('product_price')->nullable();
            $table->Integer('product_qty')->nullable();
            $table->Integer('shipping_location_id')->nullable();
            $table->String('ship_to')->nullable();
            $table->Integer('shipping_cost')->nullable();
            $table->Integer('order_subtotal')->nullable();
            $table->Integer('order_total')->nullable();
            $table->String('address')->nullable();
            $table->Integer('status')->default(1);
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
        Schema::dropIfExists('orders');
    }
}
