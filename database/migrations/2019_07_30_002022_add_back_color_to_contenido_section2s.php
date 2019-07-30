<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBackColorToContenidoSection2s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contenido_section2s', function (Blueprint $table) {
            $table->string('back_color')->nullable()->default('#FFFFFF');
        });
        Schema::table('contenido_section4s', function (Blueprint $table) {
            $table->string('back_color')->nullable()->default('#FFFFFF');
        });
        Schema::table('contenido_section5s', function (Blueprint $table) {
            $table->string('back_color')->nullable()->default('#F7F7F7');
        });
        Schema::table('info_slider_texts', function (Blueprint $table) {
            $table->string('back_color')->nullable()->default('#FFFFFF');
        });
        Schema::table('contenido_abouts', function (Blueprint $table) {
            $table->string('back_color')->nullable()->default('#F7F7F7');
        });
        Schema::table('pricings', function (Blueprint $table) {
            $table->string('back_color')->nullable()->default('#FFFFFF');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contenido_section2s', function (Blueprint $table) {
            //
        });
    }
}
