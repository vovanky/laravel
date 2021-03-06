<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('summary',100);
            $table->text('content');
            $table->unsignedBigInteger('id_theloai')->references('id')->on('theloai')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_loaitin')->references('id')->on('loaitin')->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('status');
            $table->integer('views');
            $table->string('url_images');
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
        Schema::dropIfExists('tin');
    }
}
