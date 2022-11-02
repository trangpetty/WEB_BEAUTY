<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakeupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makeup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('desc');
            $table->string('image_path');
            $table->integer('count');
            $table->mediumInteger('price');
            $table->timestamps();
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')
                    ->references('id')
                    ->on('type')
                    ->onDelete('cascade');
                    //->onDelete('set null');
        });

        // Schema::create('type', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->longText('desc');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makeup');
    }
}
