<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGaleryIdToAsignGaleries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asign_galeries', function (Blueprint $table) {
            //
            $table->unsignedInteger('galery_id')->nullable();
            $table->foreign('galery_id')->references('id')->on('galeries');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asign_galeries', function (Blueprint $table) {
            //
            $table->dropForeign(['galery_id']);
            $table->dropColumn('galery_id');
        });
    }
}
