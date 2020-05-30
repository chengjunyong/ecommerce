<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSendedColumnToSubscriptionListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscription_list', function (Blueprint $table) {
            $table->integer('sended')->nullable()->after('email')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_list', function (Blueprint $table) {
            $table->dropColumn('sended');
            $table->integer('sended')->nullable()->after('email');
        });
    }
}
