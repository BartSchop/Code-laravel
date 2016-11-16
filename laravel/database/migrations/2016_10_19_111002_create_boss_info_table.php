<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBossInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boss_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('name');
            $table->integer('level');
            $table->string('lifepoints');
            $table->string('aggressive');
            $table->string('poisonous');
            $table->string('weakness');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('boss_infos');
    }
}
