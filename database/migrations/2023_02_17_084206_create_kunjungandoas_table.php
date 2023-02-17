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
        Schema::create('kunjungandoas', function (Blueprint $table) {
            $table->id();
            $table->string('diminta_oleh');
            $table->string('fullname');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('type_of_service');
            $table->dateTime('pray_day')->nullable();
            $table->string('detail');
            $table->string('message')->nullable();
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('kunjungandoas');
    }
};
