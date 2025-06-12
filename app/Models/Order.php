<?php
// app/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'email_pemesan', 'nomor_telepon', 'alamat_asal', 'alamat_tujuan', 'tanggal_pindahan', 'status', 'package_id'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}