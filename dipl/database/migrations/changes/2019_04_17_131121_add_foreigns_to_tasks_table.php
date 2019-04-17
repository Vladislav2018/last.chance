<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreign('employee_id')
            ->references('id')->on('employees')
            ->onDelete('cascade');
            $table->foreign('group_id')
            ->references('id')->on('groups')
            ->onDelete('cascade');
            $table->foreign('manager_id')
            ->references('head_id')->on('employees')
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
        Schema::table('tasks', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
        });
    }
}
