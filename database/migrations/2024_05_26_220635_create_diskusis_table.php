<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiskusisTable extends Migration
{
    public function up()
    {
        Schema::create('diskusis', function (Blueprint $table) {
            $table->id();
            $table->string('namauser');
            $table->string('judul');
            $table->text('konten');
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diskusis');
    }
}
