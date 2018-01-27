<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWajibPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wajib_pajaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_objek_pajak')->unique();
            $table->string('nama_wajib_pajak');
            $table->string('alamat_objek_pajak');
            $table->string('alamat_wajib_pajak');
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
        Schema::dropIfExists('wajib_pajaks');
    }
}
