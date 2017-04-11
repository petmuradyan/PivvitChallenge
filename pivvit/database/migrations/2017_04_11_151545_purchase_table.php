<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchaseTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('purchase', function (Blueprint $table) {
      $table->increments('id');
      $table->string('customerName');
      $table->integer('offeringID')->unsigned();
      $table->integer('quantity');
      $table->foreign('offeringID')->references('id')->on('offering');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('purchase');
  }
}
