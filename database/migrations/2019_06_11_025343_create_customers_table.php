<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FirstMidName', 50);
            $table->string('LastName', 50);
            $table->string('HomePhoneNumber', 50);
            $table->string('WorkPhoneNumber', 50);
            $table->string('MobilePhoneNumber', 50);
            $table->string('Address', 50);
            $table->string('Email', 50);
            $table->string('Password', 50);
            $table->boolean('IsSignedIn');
            $table->boolean('Enabled');
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
        Schema::dropIfExists('customers');
    }
}
