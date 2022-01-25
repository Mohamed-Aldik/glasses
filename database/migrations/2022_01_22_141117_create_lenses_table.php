<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenses', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('lens_name');
            $table->string('sph');
            $table->string('cyl');
            $table->string('index');
            $table->string('lens_option');
            $table->decimal('regular_price');
            $table->decimal('wholesale_price')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('lenses');
    }
}
