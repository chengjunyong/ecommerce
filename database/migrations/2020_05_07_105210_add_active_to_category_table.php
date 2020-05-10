<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveToCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->integer('deactived')->after('main_category')->nullable();
        });
        Schema::table('subcategory', function (Blueprint $table) {
            $table->integer('deactived')->after('description')->nullable();
        });
        Schema::table('tag', function (Blueprint $table) {
            $table->integer('deactived')->after('description')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->dropColumn('deactived');
        });
        Schema::table('subcategory', function (Blueprint $table) {
            $table->dropColumn('deactived');
        });
        Schema::table('tag', function (Blueprint $table) {
            $table->dropColumn('deactived');
        });

    }
}
