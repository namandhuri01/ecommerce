<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('billing_fname');
            $table->string('billing_lname');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('billing_address_line1');
            $table->string('billing_address_line2');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_zip');
            $table->integer('billing_discount')->default(0);
            $table->string('billing_discount_code')->nullable();
            $table->integer('billing_subtotal');
            $table->integer('billing_tax');
            $table->integer('billing_total');
            $table->string('payment_method')->default('cashOnDelivery');
            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
}
