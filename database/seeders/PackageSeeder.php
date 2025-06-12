<?php
// database/seeders/PackageSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'nama_paket' => 'Paket A',
                'harga' => 100000.00,
                'deskripsi' => 'Cakupan layanan lengkap untuk pindahan rumah. Cocok untuk pindahan apartemen atau rumah dengan barang secukupnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_paket' => 'Paket B',
                'harga' => 200000.00,
                'deskripsi' => 'Layanan khusus untuk pindahan apartemen dengan akses terbatas. Termasuk jasa bongkar pasang furnitur dasar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_paket' => 'Paket C',
                'harga' => 300000.00,
                'deskripsi' => 'Ideal untuk pindahan kantor dan bisnis. Menjamin efisiensi waktu agar operasional bisnis tidak terganggu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}