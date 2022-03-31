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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('genre_id')->constrained();
            $table->integer('volume');
            $table->string('author');
            $table->date('date');
            $table->string('fv_editor');
            $table->string('ov_editor');
            $table->float('paperback_price');
            $table->float('digital_price');
            $table->integer('quantity');
            $table->text('synopsis');
            $table->string('language')->default('français');
            $table->string('isbn10');
            $table->string('isbn30');
            $table->integer('pages');
            $table->integer('weight');
            $table->string('size');
            $table->string('title');
            $table->string('origin');
            $table->integer('fv_volumes_number');
            $table->integer('ov_volumes_number');
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
        Schema::dropIfExists('products');
    }
};
