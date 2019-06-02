<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subskills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skill_id')->nullable(false);
            $table->string('name',20);
            $table->integer('evaluation')->default(1);
            $table->timestamps();
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subskills');
    }
}
