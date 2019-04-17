<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToPersResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pers_results', function (Blueprint $table) {
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
        Schema::table('pers_results', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
        });
    }
}
