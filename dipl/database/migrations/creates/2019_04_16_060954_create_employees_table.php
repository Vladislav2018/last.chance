<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index();//связь с табл. юзерс
            $table->integer('group_id')->unsigned()->nullable()->index();//id группы
            $table->enum('roles', ['worker', 'manager', 'admin'])->default('worker');// роли пользователя в системе
            $table->string('first_name', 100)->nullable(); //имя сотрудника
            $table->string('last_name', 100)->nullable(); //фамилия сотрудника
            $table->string('patronymic', 100)->nullable(); //отчество сотрудника
            $table->bigInteger('head_id')->nullable()->unsigned()->index(); //публичн. id главы
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
        Schema::dropIfExists('employees');
    }
}
