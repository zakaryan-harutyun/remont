<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('conversation_id');
            $table->unsignedBigInteger('from_id');
            $table->foreign('from_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('to_id');
            $table->foreign('to_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('message');
            $table->boolean('seen')->default(0);
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
        Schema::dropIfExists('messages');
    }
}
