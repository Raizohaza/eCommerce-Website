<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('PurchaseId');
            $table->decimal('Unit_Price');
            $table->integer('Quantity')->default('1');
            $table->decimal('SubTotal');
            $table->foreign('ProductId')->references('id')->on('products');
            $table->foreign('PurchaseId')->references('id')->on('purchases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_details');
    }
}
