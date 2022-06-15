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
            $table->dropColumn(['title_type', 'end_txt_type', 'penetration_type']);
           // $table->string('title_type', 255);
           // $table->string('end_txt_type', 255);
           // $table->string('penetration_type', 255);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function(Blueprint $table) {
          //  $table->dropColumn(['title_type', 'end_txt_type', 'penetration_type']);
            $table->integer('title_type');
            $table->integer('end_txt_type');
            $table->integer('penetration_type');
        });
    }
};
