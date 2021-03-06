<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('product_name');
            $table->text('product_image');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('size_id');
            $table->string('color_id');
            $table->text('short_description');
            $table->text('long_description');
            //$table->integer('product_price');
            $table->float('product_price',10,2);
            $table->float('holeSellPrice',10,2);
            $table->integer('product_qty');
            $table->integer('clickCount')->default('0');
            $table->tinyInteger('publication_status');
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
