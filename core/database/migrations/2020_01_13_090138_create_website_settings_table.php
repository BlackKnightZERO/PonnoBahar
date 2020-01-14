<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('landing1_sub_header1')->nullable();
            $table->string('landing1_header1')->nullable();
            $table->string('landing1_slider1')->nullable();
            $table->string('landing1_sub_header2')->nullable();
            $table->string('landing1_header2')->nullable();
            $table->string('landing1_slider2')->nullable();
            $table->string('landing1_sub_header3')->nullable();
            $table->string('landing1_header3')->nullable();
            $table->string('landing1_slider3')->nullable();    

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
        Schema::dropIfExists('website_settings');
    }
}
