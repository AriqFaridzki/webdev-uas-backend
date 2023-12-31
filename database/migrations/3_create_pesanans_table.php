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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            
            $table->foreignId('id_user')->constrained(
                table: 'users', column: 'id_user', indexName: 'id_user_pesanan'
            );

            $table->date('tgl_pesan');
            $table->date('tgl_selesai');
            $table->enum('status_pesanan', ['pending', 'booked', 'on_tour', 'finished']);
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
