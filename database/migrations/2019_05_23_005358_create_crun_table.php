<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crun', function (Blueprint $table) {
            $table->bigIncrements('crun_id');
            $table->string('crun_name');
            $table->string('crun_sede');
            $table->string('crun_corte');
            $table->string('crun_etiqueta');
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
        Schema::dropIfExists('crun');
    }
}
