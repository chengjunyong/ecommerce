<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcode', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("postcode");
            $table->string("area")->nullable();
            $table->string("district")->nullable();
            $table->string("state")->nullable();
            $table->integer("available")->nullable();
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
        Schema::dropIfExists('postcode');
    }
}
