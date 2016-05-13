<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confis', function (Blueprint $table) {
            $table->increments('id')->commit('自增ID');
            $table->string('name')->commit('用户名');
            $table->integer('type')->commit('类型');
            $table->string('title')->commit('标题');
            $table->integer('group')->commit('分组');
            $table->string('remark')->commit('标注(比如i标签)');
            $table->integer('createtime')->commit('创建时间');
            $table->integer('updatetime')->commit('更新时间');
            $table->integer('status')->commit('状态');
            $table->string('value')->commit('值');
            $table->integer('sort')->commit('权重');
            $table->integer('extra')->commit('备注');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('confis');
    }
}
