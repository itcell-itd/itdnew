<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostofficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postoffices', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('pincode',6);
            $table->unSignedBigInteger('district_id');
            $table->unSignedBigInteger('userid');
            $table->timestamps();
            $table->string('status',1);
            $table->foreign('district_id')->references('id')->on('menus');
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
        Schema::dropIfExists('postoffices');
    }
}
