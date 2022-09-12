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
        Schema::create('bobot', function (Blueprint $table) {
            $table->integer('Bobot')->primary;
            $table->integer('Persentase');

            $table->unsignedBigInteger('Nilai_Sub_CPMK_ID_Nilai')->nullable();
            $table->foreign('Nilai_Sub_CPMK_ID_Nilai')->references('Nilai')->on('nilai_sub_cpmk');

            $table->unsignedBigInteger('Nilai_Sub_CPMK_Lembar_Kerja_ID_Lembar_Kerja')->nullable();
            $table->foreign('Nilai_Sub_CPMK_Lembar_Kerja_ID_Lembar_Kerja')->references('ID_Lembar_Kerja')->on('lembar_kerja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bobot');
    }
};
