<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paymenttypeid')->constrained('payment_types');
            $table->foreignId('mathodid')->constrained('payment_methods');
            $table->foreignId('studentID')->constrained('users');
            $table->enum('approval_status', ['approved', 'not_approved']);
            $table->foreignId('approvedBy')->constrained('users')->nullable();
            $table->string('paymentmadeBy');
            $table->softDeletes();
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
        Schema::dropIfExists('payments');
    }
}
