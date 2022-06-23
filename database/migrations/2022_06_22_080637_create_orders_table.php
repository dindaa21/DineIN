<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('resto');
            $table->string('guestname');
            $table->string('guestmail');
            $table->string('guesttelephone');
            $table->string('comment')->nullable();
            $table->integer('adults');
            $table->date('reserv_date');
            $table->time('reserv_time');
            $table->string('payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
