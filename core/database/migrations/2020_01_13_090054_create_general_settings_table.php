<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->nullable();
            $table->string('logo')->nullable();

            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();

            $table->string('footer_header1')->nullable();
            $table->text('footer_text1')->nullable();
            $table->string('footer_header2')->nullable();
            $table->text('footer_text2')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pinterest')->nullable();
            
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
        Schema::dropIfExists('general_settings');
    }
}
