<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProductsDropColumnImage extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('image');
        });
    }
}
