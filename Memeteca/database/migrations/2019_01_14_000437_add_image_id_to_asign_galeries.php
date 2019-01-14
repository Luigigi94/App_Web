<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageIdToAsignGaleries extends Migration
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
            $table->unsignedInteger('image_id')->nullable();
            $table->foreign('image_id')->references('id')->on('images');

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
            $table->dropForeign(['image_id']);
            $table->dropColumn('image_id');
        });
    }
}
