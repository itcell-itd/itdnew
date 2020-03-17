<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examsystems', function (Blueprint $table) {
            $table->id();
            $table->string('system',25);
            $table->unSignedBigInteger('userid');
            $table->timestamps();
            $table->string('status',1);
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
        Schema::dropIfExists('examsystems');
    }
}
