<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('gross_amount');
            $table->string('payment_type');
            $table->string('bank');
            $table->string('va_number');
            $table->string('biller_code');
            $table->string('transaction_status');
            $table->string('transaction_time');
            $table->string('pdf_url');
            $table->timestamp('date_created')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('id_user');
            $table->string('status_code');

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
        Schema::dropIfExists('transaksis');
    }
}
