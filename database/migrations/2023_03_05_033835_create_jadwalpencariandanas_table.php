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
        Schema::create('jadwalpencariandanas', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->string('place');
            $table->string('activity');
            $table->string('message');
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
        Schema::dropIfExists('jadwalpencariandanas');
    }
};
