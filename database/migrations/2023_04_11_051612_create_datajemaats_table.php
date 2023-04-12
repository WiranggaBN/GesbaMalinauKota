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
        Schema::create('datajemaats', function (Blueprint $table) {
            $table->id();
            $table->string('jumlahlaki');
            $table->string('jumlahperempuan');
            $table->string('jumlahdewasa');
            $table->string('jumlahpemuda');
            $table->string('jumlahsekolahminggu');
            $table->string('jumlahlansia');
            $table->string('jumlahbalita');
            $table->string('jumlahkepalakeluarga');
            $table->string('jumlahjemaat');
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
        Schema::dropIfExists('datajemaats');
    }
};
