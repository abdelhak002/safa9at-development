<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSafa9atAndSafa9atHoldToBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balances', function (Blueprint $table) {
            $table->float('safa9at_usd')->default(0.00)->after('ccp_dinar');
            $table->float('hold_safa9at_usd')->default(0.00)->after('hold_ccp_dinar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balances', function (Blueprint $table) {
            $table->dropColumn('safa9at_usd');
            $table->dropColumn('hold_safa9at_usd');
        });
    }
}
