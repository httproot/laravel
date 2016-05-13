<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('article_id');
            $table->integer('cat_id')->commit("文章分类");
            $table->integer("sort_id")->commit("文章先后等级");
            $table->string("arttitle")->commit("文章标题");
            $table->string("content")->commit("文章内容");
            $table->integer("click")->commit("点击次数");
            $table->string("keys")->commit("文章关键字");
            $table->string("desction")->commit("文章描述");
            $table->string("opentype")->commit("打开类型 例如_blank");
            $table->string("link")->commit("打开URL地址");
            $table->dateTime("addtime")->commit("添加时间");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
