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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('p_image')->nullabel();

            $table->string('description_title')->nullable();
            $table->text('description_details')->nullable();

            $table->integer('present_price')->nullable();
            $table->integer('discount')->nullable();

            $table->tinyInteger('discount_status')->default(0);
            $table->string('discount_cupon_id')->nullable();

            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->string('attributes')->nullable();
            $table->integer('vendor_id')->nullable();

            $table->integer('in_stock')->nullable();

            $table->string('attribute')->nullable();
            $table->tinyInteger('featured_status')->default(0);
            $table->tinyInteger('on_sale_status')->default(0);
            $table->tinyInteger('top_rate')->default(0);
            
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
