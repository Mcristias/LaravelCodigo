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
        Schema::table('wines', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('origin_id');

            $table->foreign('country_id')->references('id')->on ('countries');
            $table->foreign('category_id')->references('id')->on ('categories');
            $table->foreign('origin_id')->references('id')->on ('origins');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wines', function (Blueprint $table) {
            $table->dropColumn('country_id');
            $table->dropColumn('category_id');
            $table->dropColumn('origin_id');
        });
    }
};
