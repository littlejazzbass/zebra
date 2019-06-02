<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupSubskillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_skill', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',20);
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('skill_id');
            $table->timestamps();

            //外部キー制約
            $table->foreign('group_id')
                ->references('id')
                ->on('groups')
                ->onDelete('cascade');

            $table->foreign('subskill_id')
                ->references('id')
                ->on('subskills')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_skill');
    }
}
