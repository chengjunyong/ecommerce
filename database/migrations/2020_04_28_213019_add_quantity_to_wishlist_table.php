<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuantityToWishlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wishlist_detail', function (Blueprint $table) {
            $table->string('quantity')->after('product_id')->nullable();
        });

        Schema::table('cart_detail', function (Blueprint $table) {
            $table->string('quantity')->after('product_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishlist', function (Blueprint $table) {
            $table->dropColumn('quantity');
        });

        Schema::table('cart', function (Blueprint $table) {
            $table->dropColumn('quantity');
        });
    }
}
