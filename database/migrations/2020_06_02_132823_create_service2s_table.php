<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateService2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service2s', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('icon')->nullable();
          $table->string('icon_img')->nullable();
          $table->string('title')->nullable();
          $table->text('contenido')->nullable();
          $table->string('image')->nullable();
          $table->text('contenido_modal')->nullable();
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service2s');
    }
}