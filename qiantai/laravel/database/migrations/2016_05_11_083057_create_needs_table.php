<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needs', function (Blueprint $table) {
            $table->increments('xq_id')->commit("客户需求id");
            $table->integer('uid')->commit("客户id");
            $table->integer('xq_account')->commit('数量');
            $table->string('xq_title')->commit('品名');
            $table->integer('xq_money')->commit('价格');
            $table->string('xq_place')->commit('产品交割地');
            $table->string('ucontent')->commit("客户需求内容");
            $table->integer("endtime")->commit("有效期");
            $table->integer('ustatus')->commit('审核');
			$table->dateTime('pubtime')->commit('更新时间|建立表单加一个隐藏字段传入即可');
			$table->dateTime('createtime')->commit("客户委托时间");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('needs');
    }
}
