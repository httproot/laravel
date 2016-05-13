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
            $table->increments('uid');

            $table->char('mobile', 11)->unique("手机");
            $table->char('password', 60)->commit('密码');

            $table->char('name', 20)->commit('用户名称');
            $table->char('email', 20)->commit('邮箱');
            $table->char('qq', 15)->commit('QQ');
            $table->integer('regtime')->commit("注册时间");
            $table->integer('lastlogin')->commit("上次登录时间");
            $table->rememberToken()->commir('记录Cookie信息');
            $table->tinyInteger('status')->commit("状态");
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
