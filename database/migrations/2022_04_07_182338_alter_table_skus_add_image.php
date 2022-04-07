<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSkusAddImage extends Migration
{
    public function up()
    {
        Schema::table('skus', function (Blueprint $table) {
            $table->text('image')->after('price');
        });
    }

    public function down()
    {
        Schema::table('skus', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
