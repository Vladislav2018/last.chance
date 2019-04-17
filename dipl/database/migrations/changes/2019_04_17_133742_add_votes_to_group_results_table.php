<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToGroupResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_results', function (Blueprint $table) {
            $table->foreign('group_id')
            ->references('id')->on('groups')
            ->onDelete('cascade');
            $table->foreign('head_id')
            ->references('head_id')->on('groups')
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
        Schema::table('group_results', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();          
        });
    }
}
