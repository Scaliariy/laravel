<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyProduct extends Migration
{
    public function up()
    {
        Schema::create('property_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('property_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_product');
    }
}
