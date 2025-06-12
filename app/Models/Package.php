<?php

// app/Models/Package.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['nama_paket', 'harga', 'deskripsi', 'foto_paket'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}