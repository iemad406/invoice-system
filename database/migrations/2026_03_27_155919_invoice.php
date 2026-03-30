<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
             $table->unsignedInteger('invoice_id');
             $table->primary('invoice_id');
             $table->unsignedInteger('user_id');
             $table->string('uploadedDay');
             $table->string('uploadedMonthName');
             $table->date('uploadedDate');
             $table->time('uploadedTime');
              $table->foreign('user_id')
                        ->references('user_id')
                        ->on('register')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
