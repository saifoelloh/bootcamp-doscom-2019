<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('telephone');
            $table->string('telegram')->nullable();
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->enum('status', ['daftar', 'lunas'])->default('daftar');
            $table->integer('kelompok_id')->default(0);
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
        Schema::dropIfExists('pesertas');
    }
}
