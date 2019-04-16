<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('group_id')->unsigned()->nullable()->index();//ключ
            $table->bigInteger('head_id')->unsigned()->nullable()->index();//ключ
            $table->integer('done_tasks')->unsigned()->default(0);//выполненных задач
            $table->integer('intime_tasks')->unsigned()->default(0);//вовремя выполненных задач
            $table->integer('failed_tasks')->unsigned()->default(0);//проваленых задач
            $table->integer('process_tasks')->unsigned()->default(0);//текущих задач, что в процессе выполнения
            $table->bigInteger('rating')->default(0);//рейтинг группы
            $table->tinyInteger('productivity')->unsigned()->default(0);//продуктивность группы
            $table->double('avarage_mark')->default(0);//средняя оценка качества группы
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_results');
    }
}
