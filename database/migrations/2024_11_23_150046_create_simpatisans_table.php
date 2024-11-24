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
        Schema::create('simpatisans', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->string('gender');
            $table->string('no_tps');
            $table->string('foto_self');
            $table->string('foto_ktp');
            $table->bigInteger('user_id')->unsigned()->index(); // this is working
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::table('simpatisans', function($table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simpatisans');
    }
};
