<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeсontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_сonts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id')->unsigned()->index();//связь с табл. employees
            $table->string('corp_email')->nullable();
            $table->string('pers_email')->nullable();
            $table->bigInteger('corp_number')->nullable()->unsigned();//корп. номер сотрудника
            $table->bigInteger('pers_number')->unsigned()->nullable();//перс. номер 
            $table->string('country', 58)->nullable();//страна сотрудника
            $table->string('city', 167)->nullable();//город сотрудника
            $table->string('street', 146)->nullable();//улица или квартал сотрудника
            $table->string('house', 146)->nullable();//дом сотрудника
            $table->smallInteger('apartment')->nullable()->unsigned();//квартира/комната/секция в помещении проживания сотрудника
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
        Schema::dropIfExists('employee_сonts');
    }
}
