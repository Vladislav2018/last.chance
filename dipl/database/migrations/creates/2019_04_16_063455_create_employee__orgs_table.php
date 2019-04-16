<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee__orgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id')->unsigned()->index();//связь с табл. employees
            $table->enum('sex', ['male', 'female'])->nullable();//пол сотрудника
            $table->date('birth')->nullable();//дата рождения
            $table->string('passport', 100)->unique()->nullable(); //серия и номер паспорта сотрудника
            $table->string('organization', 255)->nullable(); //полное название организации
            $table->string('position', 255)->nullable(); //должность сотрудника
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
        Schema::dropIfExists('employee__orgs');
    }
}
