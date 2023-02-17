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
        Schema::create('baptisans', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('fathername');
            $table->string('gender');
            $table->string('mothername');
            $table->string('place_of_birth');
            $table->dateTime('birth_day')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('address')->unique();
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
        Schema::dropIfExists('baptisans');
    }
};
