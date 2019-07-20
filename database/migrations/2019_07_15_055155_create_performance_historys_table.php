<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformanceHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance_historys', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subskill_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('evaluation');
            $table->unsignedInteger('group_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance_historys');
    }
}
