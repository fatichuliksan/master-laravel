<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_menus', function (Blueprint $table) {
            $table->bigIncrements('user_menu_id');
            $table->bigInteger('user_id')->nullable(false)->unsigned();
            $table->bigInteger('menu_id')->nullable(false)->unsigned();
            $table->timestamps();
        });

        Schema::table('user_menus', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('restrict');
            $table->foreign('menu_id')->references('menu_id')->on('menus')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_menus');
    }
}
