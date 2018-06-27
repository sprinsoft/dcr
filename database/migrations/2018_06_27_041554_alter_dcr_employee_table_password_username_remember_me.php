<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDcrEmployeeTablePasswordUsernameRememberMe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('dcr_employee', function (Blueprint $table) {
            $table->string('password');
            $table->string('username');
            $table->string('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('dcr_employee', function (Blueprint $table) {
            $table->dropColumn('password');
            $table->dropColumn('username');
            $table->dropColumn('remember_token');
        });
    }
}
