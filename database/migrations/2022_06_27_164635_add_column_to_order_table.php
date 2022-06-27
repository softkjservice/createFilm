<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->boolean('expired')->after('penetration_type');
            $table->boolean('finished')->after('penetration_type');
            $table->boolean('paid')->after('penetration_type');
            $table->boolean('confirmed')->after('penetration_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('expired');
            $table->dropColumn('finished');
            $table->dropColumn('paid');
            $table->dropColumn('confirmed');
        });
    }
};
