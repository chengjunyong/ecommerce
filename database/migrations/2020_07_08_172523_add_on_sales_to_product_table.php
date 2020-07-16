<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOnSalesToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->integer('on_sales')->after('active')->nullable();
            $table->date('on_sales_from')->after('on_sales')->nullable();
            $table->date('on_sales_to')->after('on_sales_from')->nullable();
            $table->string('on_sales_type')->after('on_sales_to')->nullable();
            $table->double('on_sales_amount', 2)->after('on_sales_type')->nullable();
            $table->integer('today_deal')->after('on_sales_amount')->nullable();
            $table->dateTime('today_deal_from')->after('today_deal')->nullable();
            $table->dateTime('today_deal_to')->after('today_deal_from')->nullable();
            $table->integer('today_deal_type')->after('today_deal_to')->nullable();
            $table->double('today_deal_amount', 2)->after('today_deal_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropColumn(['on_sales', 'on_sales_from', 'on_sales_to', 'on_sales_type', 'on_sales_amount', 'today_deal', 'today_deal_from', 'today_deal_to', 'today_deal_type', 'today_deal_amount']);
        });
    }
}
