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
            $table->string('name');
            $table->string('description');
            $table->string('url');
            $table->string('url_hinh');
            $table->integer('situation');
            $table->bigInteger('number_clicks');
            $table->foreignId('id_loaitin')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
