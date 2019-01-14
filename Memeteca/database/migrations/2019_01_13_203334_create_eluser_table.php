<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEluserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->boolean('is_admin')->default(false);
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
        Schema::dropIfExists('elusers');
    }
}
