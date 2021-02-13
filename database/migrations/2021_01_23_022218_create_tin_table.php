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
            $table->foreignId('id_theloai')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_loaitin')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('status');
            $table->integer('views');
            $table->tinyInteger('hot_news');
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
