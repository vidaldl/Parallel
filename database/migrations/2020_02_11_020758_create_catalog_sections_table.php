<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default('Catálogo')->nullable();
            $table->string('button_primary')->default('#EEE');
            $table->string('button_secondary')->default('#F9F9F9');
            $table->string('button_text_color')->default('#333');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_sections');
    }
}
