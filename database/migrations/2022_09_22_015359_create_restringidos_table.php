<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestringidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restringidos', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->decimal("existence", 8);
            $table->decimal("price", 8,2);
            $table->string("description", 255);
            $table->string("marca", 255);
            $table->string("medichome", 255);
            $table->string("compuesactive", 255);
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
        Schema::dropIfExists('restringidos');
    }
}
