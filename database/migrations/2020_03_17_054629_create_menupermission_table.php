<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenupermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menupermissions', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger('menu_id');
            $table->unSignedBigInteger('role_id');
            $table->unSignedBigInteger('userid');
            $table->timestamps();
            $table->string('status',1);
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('role_id')->references('id')->on('user_roles');
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
        Schema::dropIfExists('menupermissions');
    }
}
