<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->bigIncrements('user_role_id');
            $table->bigInteger('user_id')->nullable(false)->unsigned();
            $table->bigInteger('role_id')->nullable(false)->unsigned();
            $table->timestamps();
        });

        Schema::table('user_roles', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('restrict');
            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
