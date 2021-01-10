<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NameCus');
            $table->string('TelCus');
            $table->longText('AddressCus');
            $table->longText('NoteCus');
            $table->unsignedBigInteger('PurchaseId');
            $table->foreign('PurchaseId')->references('id')->on('purchases')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_infos');
    }
}
