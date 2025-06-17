<?php
// Untuk membuat tabel 'orders'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email_pemesan');
            $table->string('nomor_telepon')->nullable();
            $table->text('alamat_asal');
            $table->text('alamat_tujuan');
            $table->date('tanggal_pindahan');
            $table->enum('status', ['Request', 'Approved', 'Selesai', 'Rejected'])->default('Request');
            $table->foreignId('package_id')->nullable()->constrained('packages')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};