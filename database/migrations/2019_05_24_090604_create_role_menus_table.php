<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_menus', function (Blueprint $table) {
            $table->bigIncrements('role_menu_id');
            $table->bigInteger('menu_id')->nullable(false)->unsigned();
            $table->bigInteger('role_id')->nullable(false)->unsigned();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::table('role_menus', function (Blueprint $table) {
            $table->foreign('menu_id')->references('menu_id')->on('menus')->onDelete('restrict');
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
        Schema::dropIfExists('role_menus');
    }
}
