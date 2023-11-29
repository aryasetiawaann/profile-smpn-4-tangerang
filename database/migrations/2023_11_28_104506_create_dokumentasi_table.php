<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumentasiTable extends Migration
{
    public function up()
    {
        Schema::create('dokumentasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('photo');
            $table->enum('kelas', ['kelas-7', 'kelas-8', 'kelas-9']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dokumentasi');
    }
}