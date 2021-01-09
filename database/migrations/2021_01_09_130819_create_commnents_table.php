<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommnentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commnents', function (Blueprint $table) {
            $table->id();            
            $table->longText('Description');
            $table->unsignedBigInteger('ProductId');
            $table->foreign('ProductId')->references('id')->on('products');
            $table->unsignedBigInteger('UserId');
            $table->foreign('UserId')->references('id')->on('users');
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
        Schema::dropIfExists('commnents');
    }
}
