<?php
// app/Http/Controllers/PageController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // <-- BARIS INI DITAMBAHKAN
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Order;

class PageController extends Controller
{
    public function home()
    {
        $featuredPackages = Package::latest()->take(4)->get();
        return view('pages.beranda', compact('featuredPackages'));
    }

    public function layanan()
    {
        $packages = Package::all();
        return view('pages.layanan', compact('packages'));
    }
    
    public function detailPaket(Package $package)
    {
        return view('pages.detail-paket', compact('package'));
    }

    public function tentang()
    {
        $siteProfile = config('siteprofile.data'); 
        return view('pages.tentang', compact('siteProfile'));
    }

    public function pemesanan()
    {
        $packages = Package::all();
        return view('pages.pemesanan', compact('packages'));
    }

    public function storePemesanan(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email_pemesan' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'alamat_asal' => 'required|string',
            'alamat_tujuan' => 'required|string',
            'tanggal_pindahan' => 'required|date|after:today',
            'package_id' => 'required|exists:packages,id',
        ]);

        Order::create($request->all());

        return redirect()->route('home')->with('success', 'Pesanan Anda telah berhasil dikirim! Silahkan cek Email anda secara bekala.');
    }
}
