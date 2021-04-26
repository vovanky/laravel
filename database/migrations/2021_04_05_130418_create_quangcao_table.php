<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuangcaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quangcao', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->text('content')->nullable();
            $table->char('location');
            $table->unsignedBigInteger('id_loaitin');
            $table->foreign('id_loaitin')->references('id')->on('loaitin')->onDelete('cascade');
            $table->string('url_hinh')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('quangcao');
    }
}
