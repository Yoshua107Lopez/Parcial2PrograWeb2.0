<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiscelaneaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscelanea', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255);
            $table->string("price", 255);
            $table->string("existence", 255);
            $table->string("description", 255);
            $table->string("marca", 255);
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
        Schema::dropIfExists('miscelanea');
    }
}
