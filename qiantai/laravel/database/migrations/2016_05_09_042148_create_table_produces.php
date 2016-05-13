<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produces', function (Blueprint $table) {
            $table->increments('pid')->commit('产品主键');
            $table->integer('number')->commit('供货单号,随机货物单号');
            $table->integer('cid')->commit('公司关联关系');
            $table->integer('sid')->commit('客服专员表ID');
            $table->integer('product')->commit('产品分类');
            $table->string('title')->commit('产品名称');
            $table->string('postion')->commit('产品所在地');
            $table->integer('type')->commit('产品类型 现货 | 其他');
            $table->integer('inventory')->commit('库存量');
            $table->dateTime('pubtime')->commit('发布时间');
            $table->dateTime('endtime')->commit('截止时间');
            $table->string('company')->commit('产品所在公司');
            $table->string('kpi')->commit('主要指标');
            $table->integer('money')->commit('产品发布总金额');
            $table->integer('moneytype')->commit('产品价格类型');
            $table->integer('account')->commit('结算方式');
            $table->tinyInteger('supply')->commit('产品供货状态');
            $table->tinyInteger('publish')->commit('产品挂牌状态');
            $table->integer('place')->commit('产品交割地');
            $table->integer('revice')->commit('已经招标得到金额');
            $table->tinyInteger('risk_level')->commit('企业放心用评级  0低风险 1中风险 2高风险');
            $table->string('describe')->commit('产品描述');
            $table->string('url')->commit('图片地址|图片img_id符号,在图片的表中查找');
            $table->integer('click')->commit('点击次数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produces');
    }
}
