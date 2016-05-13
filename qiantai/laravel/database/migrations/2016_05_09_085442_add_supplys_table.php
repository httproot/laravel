<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSupplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplys', function (Blueprint $table) {
            $table->increments('supply_id')->commit("供货信息ID");
            $table->integer('uid')->commit("用户UID");
            $table->string('supply_info')->commit("供货信息表");
            $table->integer('supply_status')->commit('审核');
            $table->dateTime('suplly_time')->commit('更新时间|加隐藏字段');
            $table->dateTime('createtime')->commit("创建时间");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('supplys');
    }
}
