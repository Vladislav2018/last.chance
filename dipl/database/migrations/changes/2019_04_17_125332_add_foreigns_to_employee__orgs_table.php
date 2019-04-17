<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToEmployeeOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee__orgs', function (Blueprint $table) {
            $table->foreign('employee_id')
            ->references('id')->on('employees')
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
        Schema::table('employee__orgs', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
        });
    }
}
