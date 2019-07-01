<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Order_ID');
            $table->foreign('Order_ID') -> references('id') -> on('orders');
            $table->unsignedBigInteger('Souvenir_ID');
            $table->foreign('Souvenir_ID') -> references('id') -> on('souvenirs');
            $table->double('Price');
            $table->integer('Quantity');
            $table->double('TotalCost');
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
        Schema::dropIfExists('order_items');
    }
}
