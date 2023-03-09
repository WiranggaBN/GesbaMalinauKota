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
        Schema::create('pemberkatannikahs', function (Blueprint $table) {
            $table->id();
            $table->string('grooms_name');
            $table->string('brides_name');
            $table->string('status_grooms');
            $table->string('status_brides');
            $table->string('date_wedding');
            $table->string('phone_grooms');
            $table->string('phone_brides');
            $table->string('email_grooms');
            $table->string('email_brides');
            $table->string('address_grooms');
            $table->string('address_brides');
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
        Schema::dropIfExists('pemberkatannikahs');
    }
};
