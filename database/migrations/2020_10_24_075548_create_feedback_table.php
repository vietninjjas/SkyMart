<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('feedback', function (Blueprint $table) {
            $table->unsignedInteger('fed_id')->autoIncrement();
            $table->unsignedInteger('user_id');
            $table->text('content')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamps();
            $table->softDeletes();
            
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
        Schema::dropIfExists('feedback');
        Schema::enableForeignKeyConstraints();
    }
}
