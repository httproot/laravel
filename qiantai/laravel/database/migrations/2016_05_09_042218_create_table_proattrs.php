<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProattrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proattrs', function (Blueprint $table) {
             $table->increments('proattr_id')->commit('产品属性ID');
             $table->integer('pid')->commit('产品ID');
             $table->tinyInteger('qnet')->commit('低位发热量');
             $table->tinyInteger('st')->commit('全硫份');
             $table->tinyInteger('v')->commit('护发份');
             $table->tinyInteger('mt')->commit('全水分');
             $table->tinyInteger('g')->commit('粉结指数');
             $table->tinyInteger('y')->commit('角质厚度');
             $table->tinyInteger('m40')->commit('抗碎强度');
             $table->tinyInteger('m25')->commit('抗碎强度');
             $table->tinyInteger('m10')->commit('耐磨强度');
             $table->tinyInteger('a')->commit('灰份');
             $table->tinyInteger('size')->commit('粒度');
             $table->tinyInteger('std')->commit('灰熔点');
             $table->tinyInteger('ord')->commit('坩埚/自由膨胀序数');
             $table->tinyInteger('fc')->commit('固定碳');
             $table->tinyInteger('hgi')->commit('哈氏可磨指数');
             $table->tinyInteger('cri')->commit('焦炭反应性');
             $table->tinyInteger('csr')->commit('反应后强度');
             $table->tinyInteger('crc')->commit('焦渣特征');
             $table->tinyInteger('de')->commit('密度');
             $table->tinyInteger('mad')->commit('内水');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proattrs');
    }
}
