<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('oid')->commit('订单表ID');
            $table->integer('cid')->commit('公司id'); 
            $table->dateTime('procuretime')->commit('采购时间');
            $table->integer('amount')->commit('采购数量');
            $table->string('place')->commit("产品交割地");
            $table->integer('money')->commit('采购价格');
            $table->string('title')->commit('产品名称');
            $table->integer('status')->commit('订单状态 已完成 | 未付款');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
