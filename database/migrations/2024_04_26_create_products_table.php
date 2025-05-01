<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('qr_code')->unique();
            $table->string('name');
            $table->string('brand');
            $table->string('batch_number');
            $table->date('production_date');
            $table->string('origin');
            $table->string('manufacturer');
            $table->string('category');
            $table->text('description')->nullable();
            $table->boolean('is_authentic')->default(true);
            $table->integer('scan_count')->default(0);
            $table->timestamp('last_scanned_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}; 