<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_users');
            $table->string('name',180)->unique();
            $table->string('email',180)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',180);

            $table->string('nombre_real',180);
            $table->string('ap_p',180);
            $table->string('ap_m',180);
            $table->integer('edad');
            $table->integer('id_sexo');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
