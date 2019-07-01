<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouvenirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souvenirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('description', 50);
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id') -> references('id') -> on('suppliers');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id') -> references('id') -> on('categories');
            $table->integer('Quantity');
            $table->double('ItemPrice');
            $table->string('ImagePath');
            $table->boolean('IsInCart');
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
        Schema::dropIfExists('souvenirs');
    }
}
