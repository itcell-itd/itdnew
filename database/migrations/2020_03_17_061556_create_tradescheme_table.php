<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeschemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradeschemes', function (Blueprint $table) {
            $table->id();
            $table->string('scheme',100);
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
        Schema::dropIfExists('tradeschemes');
    }
}
