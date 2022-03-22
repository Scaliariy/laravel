<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableOrdersAddCurrencyIdAndSum extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('currency_id');
            $table->double('sum');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['currency_id', 'sum']);
        });
    }
}
