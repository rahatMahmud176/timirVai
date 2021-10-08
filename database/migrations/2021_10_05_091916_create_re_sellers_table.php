<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('re_sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reSellerName');
            $table->string('reSellerPhoneNumber');
            $table->text('password');
            $table->tinyInteger('reSellerType');
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
        Schema::dropIfExists('re_sellers');
    }
}
