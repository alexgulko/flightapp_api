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
            $table->increments('id');
            $table->string('email')->unique()->collation('utf8_general_ci');
            $table->string('name', 40)->collation('utf8_general_ci');
            $table->string('address', 50)->collation('utf8_general_ci');
            $table->string('password')->collation('utf8_general_ci');
            $table->boolean('notification')->collation('utf8_general_ci');
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
