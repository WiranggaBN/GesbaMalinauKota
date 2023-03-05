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
        Schema::create('jadwaldoadanpuasas', function (Blueprint $table) {
            $table->id();
            $table->string('speaker');
            $table->string('theme');
            $table->string('date');
            $table->string('time');
            $table->string('place');
            $table->string('address');
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
        Schema::dropIfExists('jadwaldoadanpuasas');
    }
};
