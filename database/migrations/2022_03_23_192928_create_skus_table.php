<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkusTable extends Migration
{
    public function up()
    {
        Schema::create('skus', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('count')->default(0);
            $table->double('price')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skus');
    }
}
