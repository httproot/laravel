<?php

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
            $table->increments('id')->commit('自增ID');
            $table->string('name')->commit('用户名');
            $table->string('email')->unique()->commit('邮箱/登录验证');
            $table->string('password', 60)->commit('密码');
            $table->tinyInteger('status')->commit('状态');
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
        Schema::drop('users');
    }
}
