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
        Schema::create('activate', function (Blueprint $table) {
             $table->unsignedInteger('activate_id');
             $table->primary('activate_id');
                 $table->unsignedInteger('user_id');
                 $table->date('activate_date');
                 $table->time('activate_time'); 
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
        Schema::dropIfExists('activate');
    }
};
