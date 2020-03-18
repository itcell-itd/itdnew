<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_systems', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger('system_id');
            $table->unSignedBigInteger('session_id');
            $table->unSignedBigInteger('userid');
            $table->timestamps();
            $table->string('status',1);
            $table->foreign('system_id')->references('id')->on('examsystems');
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->foreign('userid')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_systems');
    }
}
