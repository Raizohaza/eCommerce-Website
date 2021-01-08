<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string('Name')->nullable();
            $table->decimal('Price')->nullable();
            $table->longText('Description')->nullable();
            $table->longText('Image')->nullable();
            
            $table->unsignedBigInteger('Catid');
            $table->foreign('Catid')->references('id')->on('categories');
        });
        
            
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
