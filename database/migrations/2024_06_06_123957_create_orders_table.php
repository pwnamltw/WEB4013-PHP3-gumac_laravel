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
        Schema::dropIfExists('orders'); // Xóa bảng nếu tồn tại

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_fullname');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('user_address');
            $table->enum('status', ['pending', 'prepare', 'shipping', 'success', 'cancel'])->default('pending');
            $table->integer('total_money')->default(0);
            $table->integer('total_soluong')->default(0);
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
