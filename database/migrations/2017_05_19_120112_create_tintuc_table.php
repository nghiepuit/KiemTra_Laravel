<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('danhmuc')->nullable();;
            $table->string('tieude')->nullable();;
            $table->string('tacgia')->nullable();;
            $table->string('trichdan')->nullable();;
            $table->string('noidung')->nullable();;
            $table->string('hinh')->nullable();
            $table->tinyInteger('congbo');
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
        Schema::dropIfExists('tintuc');
    }
}
