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
        Schema::create('cpmk', function (Blueprint $table) {
            $table->bigIncrements('ID_CPMK')->primary;
            $table->string('Deskripsi_CPMK');

            $table->unsignedBigInteger('CPL_ID_CPL')->nullable();
            $table->foreign('CPL_ID_CPL')->references('ID_CPL')->on('cpl');

            $table->unsignedBigInteger('CPL_MK_id_MK')->nullable();
            $table->foreign('CPL_MK_id_MK')->references('ID_MK')->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpmk');
    }
};
