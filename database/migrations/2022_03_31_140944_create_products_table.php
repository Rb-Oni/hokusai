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
            $table->integer('volume')->nullable();
            $table->string('author')->nullable();
            $table->date('date')->nullable();
            $table->string('fv_editor')->nullable();
            $table->string('ov_editor')->nullable();
            $table->float('paperback_price')->nullable();
            $table->float('digital_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->text('synopsis')->nullable();
            $table->string('language')->default('français')->nullable();
            $table->string('isbn10')->nullable();
            $table->string('isbn30')->nullable();
            $table->integer('pages')->nullable();
            $table->integer('weight')->nullable();
            $table->string('size')->nullable();
            $table->string('title')->nullable();
            $table->string('origin')->nullable();
            $table->integer('fv_volumes_number')->nullable();
            $table->integer('ov_volumes_number')->nullable();
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
