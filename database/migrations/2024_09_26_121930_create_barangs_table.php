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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->char("kd_barang", length:4);
            $table->char("nama_barang", length:15);
            $table->string("satuan",length:5);
            $table->integer("harga_jual");
            $table->integer("harga_beli");
            $table->integer("stok");
            $table->string("status",length:5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
