<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrderProductAddPrice extends Migration
{
    public function up()
    {
        Schema::table('order_product', function (Blueprint $table) {
            $table->double('price');
        });
    }

    public function down()
    {
        Schema::table('order_product', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
}
