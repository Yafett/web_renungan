<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRdewasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rdewasa', function (Blueprint $table) {
            $table->id('id_rdewasa');
            $table->string('judul');
            $table->string('bacaan');
            $table->string('isi');
            $table->string('kesimpulan');
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
        Schema::dropIfExists('tb_rdewasa');
    }
}
