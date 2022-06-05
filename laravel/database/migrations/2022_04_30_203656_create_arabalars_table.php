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
        Schema::create('arabalars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('fiyat');
            $table->string('image');
            $table->integer('saticiid');
            $table->integer('markaid');
            $table->integer('kategoriid');
            $table->string('selflink');
            $table->text('aciklama')->nullable();
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
        Schema::dropIfExists('arabalars');
    }
};
