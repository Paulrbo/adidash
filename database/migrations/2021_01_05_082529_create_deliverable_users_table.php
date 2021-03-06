<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverableUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverable_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('deliverable_id');
            $table->enum('level', ['HELP', 'MEMBER', 'CREATOR']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliverable_user');
    }
}
