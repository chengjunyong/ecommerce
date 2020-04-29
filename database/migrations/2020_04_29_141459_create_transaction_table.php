<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->double('sub_total')->nullable();
            $table->double('discount_total')->nullable();
            $table->double('total')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transaction_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('sub_category_id')->nullable();
            $table->string('product_name')->nullable();
            $table->double('product_price')->nullable();
            $table->double('quantity')->nullable();
            $table->double('total')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
        Schema::dropIfExists('transaction_detail');
    }
}
