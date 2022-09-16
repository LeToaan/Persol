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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('name_account');
            $table->string('email_account')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avt_account');
            $table->string('phone_account');
            $table->string('pass_account');
            $table->integer('role');
            $table->integer('status');
            $table->rememberToken();
            $table->tinyInteger('gender_account');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
};
