<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tps');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->integer('paslon1');
            $table->integer('paslon2');
            $table->integer('tidak_sah');
            $table->string('c1');
            $table->bigInteger('saksi_id')->unsigned()->index(); // this is working
            $table->foreign('saksi_id')->references('id')->on('saksis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tps');
    }
};
