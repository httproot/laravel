<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCusmanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusmanagers', function (Blueprint $table) {
            $table->increments('mid');
            $table->string('name', 20)->commit('专员名');
            $table->char('mobile', 20)->uniqe()->commit('专员电话');
            $table->char('qq', 15)->commit('QQ');
            $table->tinyInteger('rank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cusmanager');
    }
}
