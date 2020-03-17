<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger('role_id');
            $table->string('name',250);
            $table->string('email',250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('userid');
            $table->timestamps();
            $table->string('status',1);
            $table->foreign('role_id')->references('id')->on('user_roles');
            //$table->foreign('userid')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
