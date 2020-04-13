<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductColumnToProdcutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->double('price', 10, 2)->after('name')->nullable();
            $table->integer('stock')->after('price')->nullable();
            $table->string('sku')->after('stock')->nullable();
            $table->double('weight')->after('sku')->nullable();
            $table->integer('category_id')->after('weight')->nullable();
            $table->integer('active')->after('category_id')->nullable();
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
            $table->dropColumn('price');
            $table->dropColumn('stock');
            $table->dropColumn('sku');
            $table->dropColumn('weight');
            $table->dropColumn('category_id');
            $table->dropColumn('active');
        });
    }
}
