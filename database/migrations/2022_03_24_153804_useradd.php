<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Useradd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('phone')->nullable();
            $table->string('email_code')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('is_email_validated')->nullable();
            $table->string('is_phone_validated')->nullable();
            $table->string('choosen_package')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userS', function (Blueprint $table) {
            //
        });
    }
}
