<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProductsDropColumnsCountAndPrice extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['count', 'price']);
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('count')->default(0);
            $table->double('price')->default(0);
        });
    }
}
