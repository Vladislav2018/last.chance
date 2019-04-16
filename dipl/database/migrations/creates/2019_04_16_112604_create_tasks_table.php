<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('task_name', 255);   //название задания
            $table->longText('task_description');//его описание
            $table->bigInteger('employee_id')->index()->unsigned()->nullable();//id сотрудика, за которым закреплено задание, если он 1
            $table->bigInteger('group_id')->index()->unsigned()->nullable();//id группы, за которым закреплено задание, если их > 1
            $table->bigInteger('manager_id')->index()->unsigned();//public id менеджера, который создал задание
            $table->timestamp('deadline')->nullable();//дедлаин
            $table->enum('priority', ['extra', 'main', 'primary'])->default('primary');//приоритет задачи
            $table->enum('status', ['new', 'in_process', 'done', 'failed', 'rejected','remaking'])->default('new');//статусы задачи
            $table->json('tags')->nullable();//метки задачи
            $table->timestamp('done_at')->nullable();//дата выполнения задания
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
        Schema::dropIfExists('tasks');
    }
}
