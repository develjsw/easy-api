<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('member_cd');
            $table->string('member_nm')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('reg_date');
            $table->timestamp('mod_date');
            $table->timestamp('del_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
