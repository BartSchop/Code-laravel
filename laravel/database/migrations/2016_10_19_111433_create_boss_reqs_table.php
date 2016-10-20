<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBossReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boss_reqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('req1');
            $table->string('req2');
            $table->string('req3');
            $table->string('req4');
            $table->string('req5');
            $table->string('req6');
            $table->string('req7');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('boss_reqs');
    }
}
