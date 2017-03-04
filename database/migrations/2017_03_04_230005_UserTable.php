<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique(); //Campo unico, no puede repetirse porque es como el ID de usuario para el login.
            $table->string('password');
            $table->string('gender');
            $table->string('birthday');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
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
        Schema::drop('users');
    }
}