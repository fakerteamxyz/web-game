<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraktirKopisTable extends Migration
{
    public function up()
    {
        Schema::create('traktirkopis', function (Blueprint $table) {
            $table->id();
            $table->string('jeniskopi');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('traktirkopis');
    }
}
