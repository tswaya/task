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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sku');
            $table->string('stock');
            $table->string('cog');
            $table->string('price');
            $table->string('lenght');
            $table->string('width');
            $table->string('height');
            $table->string('weight');
            $table->string('fdw_sku');
            $table->string('colour_0');
            $table->string('colour_1');
            $table->string('colour_2');
            $table->string('asin_uk');
            $table->string('asin_ca');
            $table->string('asin_fr');
            $table->string('asin_de');
            $table->string('asin_es');
            $table->string('asin_it');
            $table->string('asin_ni');
            $table->string('asin_se');
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
