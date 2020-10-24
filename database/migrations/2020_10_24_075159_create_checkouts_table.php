<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('checkouts', function (Blueprint $table) {
            $table->unsignedInteger('cart_id');
            $table->unsignedInteger('order_id');
            $table->tinyInteger('check_status')->default(0);
            $table->integer('total_price')->nullable();
            $table->tinyInteger('payment')->default(0);
            $table->timestamps();
            $table->foreign('cart_id')->references('cart_id')->on('carts');
            $table->foreign('order_id')->references('order_id')->on('orders');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('checkouts');
        Schema::enableForeignKeyConstraints();
    }
}
