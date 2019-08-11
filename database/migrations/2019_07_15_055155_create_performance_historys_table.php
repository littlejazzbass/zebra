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
            $table->unsignedInteger('group_number'); //例：201906だったら6月など
            $table->timestamps();

            $table->foreign('subskill_id')
                ->references('id')
                ->on('subskills')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('performance_historys');
    }
}
