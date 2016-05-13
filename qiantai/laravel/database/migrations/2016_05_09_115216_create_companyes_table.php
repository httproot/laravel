<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyes', function (Blueprint $table) {
            $table->increments('cid');
            $table->integer('uid')->commit('用户id');
            $table->integer('number')->commit('公司编号');
            $table->integer('is_hot')->commit('是否是名企 0 | 1');
            $table->string('name', 30)->commit('公司名称');
            $table->tinyInteger('type')->commit('公司类型');
            $table->string('address', 60)->commit('公司地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companyes');
    }
}
